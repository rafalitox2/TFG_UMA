FROM php:7.4-apache

COPY ./etc/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update && apt-get install -y build-essential git unzip libzip-dev wait-for-it 
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN docker-php-ext-install pdo_mysql zip

RUN a2enmod rewrite && service apache2 restart
ENTRYPOINT ["sh", "-c", "/var/www/html/install.sh -y && /usr/sbin/apachectl -D FOREGROUND"]