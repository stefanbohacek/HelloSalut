FROM php:8.2.1-apache
RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY ./ /var/www/html/