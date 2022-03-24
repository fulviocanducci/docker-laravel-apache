FROM php:8.1-apache

EXPOSE 9000

EXPOSE 80

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN a2enmod rewrite

RUN apt-get update && apt-get install git libzip-dev vim supervisor nano -y

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN docker-php-ext-enable pdo_mysql mysqli

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN usermod -u 1000 www-data

COPY --chown=www-data:www-data . /var/www/html/

USER www-data