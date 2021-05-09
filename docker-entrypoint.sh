#!/bin/bash
set -e

rm -rf vendor

if [ -d "var/" ]; then
    rm -rf var/cache/*
    rm -rf var/logs/*
    chown -R www-data:www-data var/
fi

composer install --prefer-dist --no-interaction --optimize-autoloader -v
php bin/console doctrine:database:create  --no-interaction --if-not-exists
php bin/console doctrine:migrations:migrate --no-interaction


if [ "${1#-}" != "$1" ]; then
	set -- php "$@"
fi

exec "$@"
