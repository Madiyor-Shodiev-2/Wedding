FROM php:8.2-fpm-alpine

RUN apk add --no-cache \
    libpng \
    libpng-dev \
    libzip-dev \
    oniguruma-dev \
    postgresql-dev \
    zip \
    curl \
    git \
    autoconf \
    g++ \
    make \
    && docker-php-ext-install intl pdo pdo_mysql pdo_pgsql zip gd mbstring exif pcntl \
    && pecl install redis \
    && docker-php-ext-enable redis

COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY ../composer.json ../composer.lock ./

COPY .. .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    chown -R www-data:www-data /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
