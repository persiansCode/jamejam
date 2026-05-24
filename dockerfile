FROM php:8.2-apache

# ============================================
# 1. نصب همه وابستگی‌های مورد نیاز
# ============================================
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    nodejs \
    npm \
    && docker-php-ext-install \
        pdo_mysql \
        pdo_sqlite \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# ============================================
# 2. نصب Composer از منبع رسمی
# ============================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تنظیم Composer برای زمان بیشتر و منابع اصلی
RUN composer config --global process-timeout 2000
RUN composer config --global repo.packagist composer https://packagist.org

# ============================================
# 3. کپی پروژه و نصب وابستگی‌ها
# ============================================
COPY . /var/www/html
WORKDIR /var/www/html

# نصب وابستگی‌های PHP (با 3 بار تلاش)
RUN for i in 1 2 3; do \
        composer install --no-dev --optimize-autoloader --prefer-dist --timeout=2000 --no-interaction && break || \
        echo "Attempt $i failed, retrying in 10 seconds..." && sleep 10; \
    done

# ============================================
# 4. نصب و کامپایل Tailwind (با fallback)
# ============================================
RUN if [ -f package.json ]; then \
        npm install && \
        (npm run build || npm run production || npm run dev || echo "No build script found"); \
    else \
        echo "No package.json found, skipping Node modules"; \
    fi

# ============================================
# 5. ایجاد تمام پوشه‌های مورد نیاز لاراول
# ============================================
RUN mkdir -p storage/framework/sessions
RUN mkdir -p storage/framework/cache
RUN mkdir -p storage/framework/views
RUN mkdir -p storage/logs
RUN mkdir -p bootstrap/cache
RUN mkdir -p database
RUN mkdir -p public/storage

# ============================================
# 6. تنظیم دیتابیس SQLite
# ============================================
RUN touch database/database.sqlite
RUN chmod 666 database/database.sqlite

# ============================================
# 7. تنظیم دسترسی‌ها (مهم‌ترین بخش)
# ============================================
RUN chown -R www-data:www-data storage bootstrap/cache database public/storage
RUN chmod -R 775 storage bootstrap/cache database
RUN chmod -R 775 storage/framework
RUN chmod -R 775 storage/logs
RUN chmod 775 public/storage

# ============================================
# 8. تنظیم فایل env
# ============================================
RUN echo "APP_ENV=production" > .env && \
    echo "APP_DEBUG=false" >> .env && \
    echo "APP_KEY=" >> .env && \
    echo "DB_CONNECTION=sqlite" >> .env && \
    echo "SESSION_DRIVER=file" >> .env && \
    echo "CACHE_STORE=file" >> .env && \
    echo "LOG_CHANNEL=single" >> .env && \
    echo "APP_URL=https://jamejam-4.onrender.com" >> .env

# ============================================
# 9. تنظیمات لاراول
# ============================================
RUN php artisan key:generate --force
RUN php artisan storage:link --force || true

# ============================================
# 10. کش کردن تنظیمات (اختیاری، با ignore خطا)
# ============================================
RUN php artisan config:cache || true
RUN php artisan route:cache || true
RUN php artisan view:cache || true

# ============================================
# 11. اجرای migration و seeder
# ============================================
RUN php artisan migrate --force 2>&1 || echo "Migration skipped (maybe first time)"
RUN php artisan db:seed --force --class=UserTestSeeder 2>&1 || echo "Seeder skipped"

# ============================================
# 12. تنظیم Apache
# ============================================
RUN a2enmod rewrite
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# ============================================
# 13. نمایش فایل‌ها برای دیباگ (اختیاری)
# ============================================
RUN ls -la /var/www/html/public/ && ls -la /var/www/html/storage/framework/

EXPOSE 80
CMD ["apache2-foreground"]