ARG PHP_VERSION=8.5
FROM php:${PHP_VERSION}-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libicu-dev libzip-dev unzip locales \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql intl zip

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN sed -i '/de_DE /s/^# //g' /etc/locale.gen \
    && sed -i '/es_ES /s/^# //g' /etc/locale.gen \
    && locale-gen

ENV APACHE_DOCUMENT_ROOT /var/www/html/app/webroot

RUN a2enmod rewrite

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
