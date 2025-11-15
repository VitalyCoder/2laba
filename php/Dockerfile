FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    curl tar libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install gd pdo pdo_mysql mysqli zip \
 && rm -rf /var/lib/apt/lists/*

COPY php/php.ini /usr/local/etc/php/
COPY php/www.conf /usr/local/etc/php-fpm.d/
WORKDIR /var/www/html
ENTRYPOINT ["/bin/sh","-c","if [ ! -f index.php ]; then echo 'Downloading WordPress...'; curl -s https://wordpress.org/latest.tar.gz -o /tmp/wp.tar.gz && tar -xzf /tmp/wp.tar.gz --strip-components=1 && rm /tmp/wp.tar.gz; fi; chown -R www-data:www-data /var/www/html; exec php-fpm"]
