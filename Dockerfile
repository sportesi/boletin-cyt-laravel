FROM php:7.2.1-apache-stretch

WORKDIR /var/www/html

ADD . /var/www/html

COPY ./docker/site.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data storage bootstrap/cache