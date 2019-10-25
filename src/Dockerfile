FROM php:7.3-fpm-alpine

LABEL maintainer="yash.patadia@ambab.com"
LABEL version="1.0"
LABEL description="base php test"

# Install System Packages
RUN apk update && apk add \
    bash \
    mysql-client \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    curl \
    graphviz

# Install PHP Extenstions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    mbstring \
    tokenizer \
    xml \
    ctype \
    json \
    bcmath

# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy Application
COPY ./ /var/www/html

WORKDIR /var/www/html

CMD ["php-fpm"]