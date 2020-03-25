FROM php:7-fpm-alpine
RUN docker-php-ext-install mysqli
COPY ./secret /calc/secret
EXPOSE 1337