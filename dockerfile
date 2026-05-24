FROM php:8.2-apache

# ============================================
# ۱. نصب وابستگی‌های سیستم
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
# ۲. تنظیمات اولیه Composer
# ============================================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_PROCESS_TIMEOUT=3600
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www/html

# ============================================
# ۳. کپی کردن «فقط» فایل‌های پکیج (شاه‌کلید سرعت بیلد)
# ============================================
COPY composer.json composer.lock* package.json package-lock.json* ./

# ============================================
# ۴. متلاشی کردن میرورهای مخرب (Runflare) در فایل‌های Lock
# ============================================
RUN if [ -f composer.lock ]; then sed -i 's|https://mirror-composer.runflare.com/|https://repo.packagist.org/|g' composer.lock; fi && \
    composer config --global repo.packagist composer https://packagist.org

RUN if [ -f package-lock.json ]; then sed -i 's|https://mirror-npm.runflare.com/|https://registry.npmjs.org/|g' package-lock.json; fi && \
    npm config set registry https://registry.npmjs.org/

# ============================================
# ۵. نصب پکیج‌ها (مستقیم، بدون معطلی و با استفاده از کش داکر)
# ============================================
# ============================================
# ۵. نصب پکیج‌ها (مستقیم، بدون معطلی و با استفاده از کش داکر)
# ============================================
RUN composer install --no-dev --no-autoloader --no-interaction --prefer-dist

RUN if [ -f package.json ]; then \
        npm install --fetch-timeout=600000 --fetch-retries=5 && \
        npm run build; \
    fi
# ============================================
# ۶. کپی کردن کل کدهای پروژه و لود نهایی اتولودر
# ============================================
COPY . .
RUN composer dump-autoload --optimize --no-dev

# ============================================
# ۷. ساختارمند کردن استوریج و دیتابیس سشن (SQLite)
# ============================================
RUN mkdir -p storage/framework/sessions \
             storage/framework/cache \
             storage/framework/views \
             storage/logs \
             bootstrap/cache \
             database \
             public/storage

# ایجاد فایل دیتابیس برای اینکه سشن و کش دیتابیسی به خطا نخورند
RUN touch database/database.sqlite

# ============================================
# ۸. تنظیم فایل خط محیطی و اجرای مایگریشن‌ها در زمان بیلد
# ============================================
# ============================================
# ۸. تنظیم فایل خط محیطی و اجرای مایگریشن‌ها در زمان بیلد
# ============================================
RUN cp .env.example .env || echo "APP_ENV=production" > .env

# اجرای مایگریشن و سیدر و بیک کردن داده‌ها درون ایمیج داکر
RUN php artisan key:generate --force && \
    php artisan migrate --force && \
    php artisan db:seed --force --class=UserTestSeeder || echo "Seeder skipped"

# فقط ویوها و مسیرها را کش میکنیم (کانفیگ را کش نمیکنیم تا متغیرهای رندر زنده خوانده شوند)
RUN php artisan route:cache && \
    php artisan view:cache && \
    php artisan storage:link --force || true

# ============================================
# ۹. دسترسی‌های نهایی (حل قطعی ارور سشن و دیتابیس SQLite)
# ============================================
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# ============================================
# ۱۰. تنظیمات آپاچی و دستور استارت هوشمند
# ============================================
RUN a2enmod rewrite
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80

# شاه‌کلید حل مشکل: قبل از لود شدن آپاچی، مطمئن می‌شویم کش کانفیگ کاملاً پاک است
CMD ["sh", "-c", "php artisan config:clear && apache2-foreground"]