FROM php:8.2-apache

# ============================================
# ۱. نصب همه وابستگی‌های مورد نیاز سیستم
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
# ۲. نصب Composer از منبع رسمی
# ============================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تنظیم درست تایم‌اوت کامپوزر از طریق متغیر محیطی (جایگزین پارامتر اشتباه قبلی)
ENV COMPOSER_PROCESS_TIMEOUT=2000
RUN composer config --global repo.packagist composer https://packagist.org

# ============================================
# ۳. کپی پروژه و ورود به پوشه کاری
# ============================================
COPY . /var/www/html
WORKDIR /var/www/html

# ============================================
# ۴. حل خطای کامپوزر (حذف پارامتر --timeout)
# ============================================
RUN for i in 1 2 3; do \
        composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction && break || \
        { echo "Attempt $i failed, retrying in 10 seconds..."; sleep 10; }; \
    done

# ============================================
# ۵. حل خطای NPM (دور زدن میرورهای ایرانی و اجبار به ریجستری اصلی)
# ============================================
RUN if [ -f package.json ]; then \
        npm config set registry https://registry.npmjs.org/ && \
        npm install && \
        (npm run build || npm run production || echo "No build script found"); \
    else \
        echo "No package.json found, skipping Node modules"; \
    fi

# ============================================
# ۶. ایجاد پوشه‌های ساختاری لاراول و دیتابیس SQLite
# ============================================
RUN mkdir -p storage/framework/sessions \
             storage/framework/cache \
             storage/framework/views \
             storage/logs \
             bootstrap/cache \
             database \
             public/storage

RUN touch database/database.sqlite && chmod 666 database/database.sqlite

# ============================================
# ۷. تنظیم دسترسی‌ها (جلوگیری از خطای ۵۰۰ برای Permission)
# ============================================
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 storage bootstrap/cache database

# ============================================
# ۸. تنظیم فایل env و کارهای اولیه لاراول
# ============================================
RUN cp .env.example .env || echo "APP_ENV=production" > .env

# تولید کلید امنیتی و لینک کردن استوریج
RUN php artisan key:generate --force && \
    php artisan storage:link --force || true

# ============================================
# ۹. اجرای Migration و Seeder (با اطمینان از وجود هسته لاراول)
# ============================================
RUN php artisan migrate --force && \
    php artisan db:seed --force --class=UserTestSeeder

# بهینه‌سازی کش‌های لاراول برای افزایش سرعت سرور
RUN php artisan config:cache || true && \
    php artisan route:cache || true && \
    php artisan view:cache || true

# ============================================
# ۱۰. تنظیمات نهایی سرور Apache
# ============================================
RUN a2enmod rewrite
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80
CMD ["apache2-foreground"]