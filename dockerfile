FROM php:8.2-apache

# نصب وابستگی‌های سیستم
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# نصب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# کپی فایل‌های پروژه
COPY . /var/www/html

# تنظیم دایرکتوری کاری
WORKDIR /var/www/html

# نصب وابستگی‌های Composer
RUN composer install --no-dev --optimize-autoloader

# تنظیم دسترسی‌ها
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# تنظیم DocumentRoot به پوشه public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!/g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!/g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# کپی .env.example به .env (اگر وجود دارد)
RUN if [ -f .env.example ]; then cp .env.example .env; fi

# تولید APP_KEY
RUN php artisan key:generate

# فعال کردن mod_rewrite
RUN a2enmod rewrite

EXPOSE 80
CMD ["apache2-foreground"]