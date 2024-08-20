# Utiliser l'image PHP 8.3 FPM basée sur Alpine Linux
FROM php:8.3-fpm-alpine

# Définir l'auteur du conteneur
LABEL authors="lotfi"

# Installer les dépendances nécessaires
RUN apk add --no-cache \
    autoconf \
    g++ \
    make \
    curl-dev \
    pkgconfig

# Installer l'extension PDO pour PHP
RUN docker-php-ext-install pdo

# Installer et activer l'extension MongoDB pour PHP
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Copier Composer depuis l'image officielle de Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/symfo
