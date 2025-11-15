FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install gd pdo pdo_mysql mysqli zip \
 && rm -rf /var/lib/apt/lists/*

COPY php/php.ini /usr/local/etc/php/
COPY php/www.conf /usr/local/etc/php-fpm.d/
COPY wordpress /var/www/html

WORKDIR /var/www/html
