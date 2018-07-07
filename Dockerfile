
FROM php:fpm

MAINTAINER Robert Cox <robert@studiorclv>

RUN \
  apt-get -y update && \
  apt-get -y install   \
    libxml2-dev         \
    libxslt1-dev        \
    libicu-dev          \
    libmcrypt-dev       \
    curl                \
    libcurl4-gnutls-dev \
    zlib1g-dev          \
    libpng-dev          \
    zip                 \
    unzip               \
    libc6

RUN pecl install mcrypt-1.0.1

RUN \
  docker-php-ext-install \
    soap      \
    xml       \
    intl      \
    mbstring  \
    curl      \
    ctype     \
    json      \
    iconv     \
    zip       \
    pdo       \
    pdo_mysql

RUN docker-php-ext-enable mcrypt

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer