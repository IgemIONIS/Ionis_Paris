FROM php:7.4-apache

WORKDIR /var/www/html
RUN apt-get update
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
# COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini
COPY . .
