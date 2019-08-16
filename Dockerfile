FROM nginx:1.17-alpine

COPY docker/apk-repos3.8 /etc/apk/repositories

RUN apk update && apk add \
    php7 php7-fpm php7-tokenizer \
    php7-xml php7-mbstring \
    php7-pdo php7-dom php7-xmlwriter \
    php7-gd php7-pdo_mysql \
    php7-zip php7-openssl \
    php7-json php7-phar \
    php7-zlib php7-session php7-ctype \
    vim unzip zip git \
    ca-certificates curl \
    supervisor nodejs nodejs-npm

RUN cp /usr/bin/php7 /usr/local/bin/php

COPY ./docker/nginx.conf /etc/nginx/conf.d/default.conf
COPY ./docker/composer-install.sh /root/composer-install.sh
COPY ./docker/supervisord.conf /root/supervisord.conf

RUN chmod a+x /root/composer-install.sh && /root/composer-install.sh

WORKDIR /usr/share/nginx/html
COPY ./ /usr/share/nginx/html

RUN chmod -R 777 storage bootstrap/cache

CMD supervisord -n -c /root/supervisord.conf