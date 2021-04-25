#!/bin/bash

composer install

wait-for-it -h mysql -p 3306 -t 50

php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration
