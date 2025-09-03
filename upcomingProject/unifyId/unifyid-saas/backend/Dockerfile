FROM php:8.1-fpm

# System dependencies
RUN apt-get update \
  && apt-get install -y \
     libzip-dev \
     zip \
     unzip \
     git \
  && docker-php-ext-install pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy source & install PHP dependencies
COPY . .
RUN composer install --no-interaction --optimize-autoloader

CMD ["php-fpm"]
