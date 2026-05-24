# استفاده از image رسمی PHP با Apache
FROM php:8.2-apache

# نصب وابستگی‌های سیستم و افزونه‌های PHP
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# نصب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# کپی فایل‌های پروژه به دایرکتوری وب سرور
COPY . /var/www/html

# تنظیم مجوزهای صحیح برای ذخیره‌سازی و کش
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# فعال کردن rewrite mod آپاچی
RUN a2enmod rewrite

# 🚨 مهم: مشخص کردن پورت و دستور اجرا (حذف این خط باعث خطای Application exited early می‌شود)
EXPOSE 80
CMD ["apache2-foreground"]