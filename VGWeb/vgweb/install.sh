#!/bin/bash

composer install

wait-for-it -h mysql -p 3306 -t 50

php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration

if [ ! -d config/jwt ] ; then

    mkdir -p config/jwt

    openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096 -pass pass:1234
    openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout -passin pass:1234

    chmod 777 config/jwt/private.pem
fi