FROM php:8.0-fpm 
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer
RUN apt update &&\
    apt install -y git zip unzip &&\
    docker-php-ext-install pdo_mysql
WORKDIR "/var/www/app"