# Set master image
FROM php:7.4-fpm-alpine

#ADD ./ /var/www/html
#RUN chown www-data:www-data /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Additional dependencies
RUN apk update && apk add --no-cache \
    build-base \
    shadow \
    curl \
    tzdata \
    php7-pdo \
    php7-pdo_mysql \
    php7-mcrypt \
    php7-mbstring \
    php7-xml \
    php7-openssl \
    php7-json \
    php7-phar \
    php7-zip \
    php7-dom \
    php7-session \
    php7-zlib \
    supervisor \
    bash

# Add and Enable PHP-PDO Extenstions
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# Adjust TimeZone
RUN cp  /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime
RUN echo "America/Sao_Paulo" > /etc/timezone

# Add Supervisor config
COPY ./.docker/supervisor/supervisord.conf /etc/supervisord.conf

# Install Xdebug
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-2.9.6 \
    && docker-php-ext-enable xdebug

# Install PHP Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Add Entrypoint
COPY /.docker/php/entrypoint.sh /
RUN chmod +x /entrypoint.sh

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Add UID '1000' to www-data
RUN usermod -u 1000 www-data

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000

CMD ["/entrypoint.sh"]
