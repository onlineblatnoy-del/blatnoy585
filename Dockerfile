FROM php:8.1-apache

# PHP kengaytmalari o‘rnatish (agar kerak bo‘lsa)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Fayllarni konteynerga nusxalash
COPY . /var/www/html/

# Apache root papkani sozlash
WORKDIR /var/www/html/

EXPOSE 80
