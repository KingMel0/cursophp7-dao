FROM php:7.4-apache

RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

#RUN sed "s/.*extension=pdo_mysql/extension=pdo_mysql/g" -i "$PHP_INI_DIR/php.ini"

COPY . /var/www/html

RUN chown www-data: -R /var/www

COPY . /var/www/html
