FROM php:8.0-cli

WORKDIR /app

RUN pecl install swoole
RUN docker-php-ext-enable swoole

COPY . /app

CMD php http-server.php
