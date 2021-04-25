FROM php:7.4.12-fpm

RUN apt-get update && apt-get install -y build-essential git unzip libzip-dev wait-for-it 
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN docker-php-ext-install pdo_mysql zip
