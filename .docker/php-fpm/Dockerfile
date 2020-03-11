ARG TARGET_PHP_VERSION=7.4
FROM php:${TARGET_PHP_VERSION}-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libicu-dev \
        libpq-dev \
        libxpm-dev \
        libvpx-dev \
    && pecl install xdebug \
    && docker-php-ext-enable opcache \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) mysqli \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install -j$(nproc) exif
#    && docker-php-ext-configure gd \
#        --with-freetype-dir=/usr/include/ \
#        --with-jpeg-dir=/usr/include/ \
#        --with-xpm-dir=/usr/lib/x86_64-linux-gnu/ \
#        --with-vpx-dir=/usr/lib/x86_64-linux-gnu/ \