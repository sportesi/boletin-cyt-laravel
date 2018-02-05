FROM php:7.2.1-apache-stretch

# Set working dir
WORKDIR /var/www/html

# Copy source code into image
COPY . /var/www/html

# Copy apache default conf to point to public dir in project
COPY ./docker/site.conf /etc/apache2/sites-available/000-default.conf

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"

# Update container
RUN apt-get update && apt-get upgrade -y

# Install utilities
RUN apt-get install -y \
    gnupg2 \
    nano \
    htop \
    unzip \
    zip

# Get npm
RUN curl -sL https://deb.nodesource.com/setup_9.x | bash -

# Install npm
RUN apt-get install -y nodejs

# Install node_modules
RUN npm install --silent

# Install composer vendor
RUN php composer.phar install

# Set the right permissions to storage and cache dirs
RUN chown -R www-data:www-data storage bootstrap/cache

# Copy env-example
COPY ./.env.example /var/www/html/.env

# Run Laravel Mix
RUN npm run prod --silent

# Create Dev - QA Database
RUN touch /var/www/html/database/database.sqlite
RUN chown www-data:www-data /var/www/html/database/database.sqlite

# Run migrations
RUN php artisan migrate --seed