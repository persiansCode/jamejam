FROM php:8.2-apache

# نصب وابستگی‌ها
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# نصب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# کپی و تنظیم پروژه
COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache
RUN cp .env.example .env || true
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# تنظیم Apache به پوشه public
RUN a2enmod rewrite
RUN ln -s /var/www/html/public /var/www/html/public_html || true
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf

EXPOSE 80
CMD ["apache2-foreground"]