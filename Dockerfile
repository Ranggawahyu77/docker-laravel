FROM php:fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# docker-compose exec php php /var/www/html/artisan migrate
# docker compose exec php bash
# sudo apt update
# sudo apt install git
# composer install --prefer-dist