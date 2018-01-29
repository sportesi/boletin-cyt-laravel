FROM nginx:alpine

WORKDIR /var/www/html

ADD . /var/www/html

EXPOSE 80