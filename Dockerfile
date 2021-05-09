FROM composer
FROM php:7.1-apache

RUN apt-get update \
  && apt-get install -y git unzip zip libwebp-dev zlib1g-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libxpm-dev \
  && docker-php-ext-install -j$(nproc) iconv \
  && docker-php-ext-install -j$(nproc) zip \
  && docker-php-ext-install -j$(nproc) pdo_mysql \
  && usermod -u 1000 www-data

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY --from=0 /usr/bin/composer /usr/bin/composer
COPY . /var/www/html/

COPY ./docker-entrypoint.sh /
ENTRYPOINT ["/docker-entrypoint.sh"]

WORKDIR /var/www/html

CMD ["apache2-foreground"]