FROM php:8.2-apache

# نصب وابستگی‌ها
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev libzip-dev zip unzip \
    sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && docker-php-ext-install pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

# ایجاد تمام پوشه‌های مورد نیاز لاراول
RUN mkdir -p storage/framework/sessions
RUN mkdir -p storage/framework/cache
RUN mkdir -p storage/framework/views
RUN mkdir -p storage/logs
RUN mkdir -p bootstrap/cache
RUN mkdir -p database
RUN mkdir -p public/storage

# ایجاد دیتابیس SQLite
RUN touch database/database.sqlite
RUN chmod 666 database/database.sqlite

# تنظیم دسترسی‌ها (مهمترین بخش)
RUN chown -R www-data:www-data storage bootstrap/cache database public/storage
RUN chmod -R 775 storage bootstrap/cache database
RUN chmod -R 775 storage/framework
RUN chmod -R 775 storage/logs

# تنظیم فایل env
RUN echo "APP_ENV=production" > .env
RUN echo "APP_DEBUG=true" >> .env
RUN echo "APP_KEY=" >> .env
RUN echo "DB_CONNECTION=sqlite" >> .env
RUN echo "SESSION_DRIVER=file" >> .env
RUN echo "CACHE_STORE=file" >> .env
RUN echo "LOG_CHANNEL=single" >> .env

RUN php artisan key:generate --force
RUN php artisan storage:link || true
RUN php artisan config:cache
RUN php artisan migrate --force 2>&1 || true

# تنظیم Apache
RUN a2enmod rewrite
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80
CMD ["apache2-foreground"]