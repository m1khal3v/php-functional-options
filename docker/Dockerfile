FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    ssh \
    git \
    sudo \
    libzip-dev \
    unzip

RUN docker-php-ext-install zip

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /app

ENV PATH="$PATH:/app/vendor/bin"

COPY ./composer.json /app/composer.json
COPY ./composer.lock /app/composer.lock
COPY ./src/ /app/src/
COPY ./phpstan.neon /app/phpstan.neon
COPY ./phpunit.xml /app/phpunit.xml
COPY ./tests /app/tests

RUN composer install --prefer-dist --no-scripts --optimize-autoloader
