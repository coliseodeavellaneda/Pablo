FROM php:8.1.0-apache

ARG NODE_VERSION=16

ARG DEBIAN_FRONTEND=noninteractive

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN docker-php-ext-install mysqli

RUN apt-get update && apt-get install -y \
    sendmail \
    libpng-dev \
    libzip-dev \
    zlib1g-dev \
    libonig-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip pdo pdo_mysql mbstring gd

# Install composer
RUN curl -sS https://getcomposer.org/installer \
        | php -- --install-dir=/usr/local/bin \
        && mv /usr/local/bin/composer.phar /usr/local/bin/composer

# Install node
RUN apt-get update -y && \
    curl -sL https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - && \
    apt-get install -y nodejs
RUN mkdir -p /var/www/.npm
RUN chmod -R 777 /var/www/.npm

# Configure apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite
