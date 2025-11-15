FROM php:8.1-fpm

# Установка необходимых расширений PHP
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Установка дополнительных зависимостей
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Копирование файла конфигурации PHP
COPY php/php.ini /usr/local/etc/php/

# Копирование файла конфигурации www.conf для PHP-FPM
COPY php/www.conf /usr/local/etc/php-fpm.d/

# Установка рабочей директории
WORKDIR /var/www/html

# Копирование файлов приложения в контейнер
COPY wordpress /var/www/html

# Установка прав доступа
RUN chown -R www-data:www-data /var/www/html

# Экспонирование порта
EXPOSE 9000

CMD ["php-fpm"]
