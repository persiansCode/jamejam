FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip sqlite3 \
    && docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN mkdir -p database && touch database/database.sqlite && chmod 666 database/database.sqlite
RUN chown -R www-data:www-data storage bootstrap/cache database
RUN chmod -R 775 storage bootstrap/cache database

# ایجاد فایل env درست
RUN echo "APP_ENV=production" > .env
RUN echo "APP_DEBUG=true" >> .env
RUN echo "APP_KEY=" >> .env
RUN echo "DB_CONNECTION=sqlite" >> .env
RUN echo "SESSION_DRIVER=file" >> .env
RUN echo "CACHE_STORE=file" >> .env
RUN echo "LOG_CHANNEL=single" >> .env

RUN php artisan key:generate --force
RUN php artisan config:cache
RUN php artisan migrate --force 2>&1 || echo "Migration warning ignored"

RUN a2enmod rewrite
RUN sed -i 's#/var/www/html#/var/www/html/public#g' /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 80
CMD ["apache2-foreground"]