# Production Docker File

# Get the latest composer
FROM composer:latest as build

# Copy In Our Custom Code
WORKDIR /app
COPY . /app

# Install composer and the dependencies including autoloader optimization.  We can also use "composer dump autoload" if desired
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN composer update
RUN composer install --optimize-autoloader

# Use the official PHP image.
# https://hub.docker.com/_/php
FROM php:8.2.3-apache

#Ensure we are in production Mode - We can switch these off if needed.
#ENV APP_ENV=production
ENV APP_DEBUG=true

# Configure PHP for Cloud Run.
# Precompile PHP code with opcache.
RUN docker-php-ext-install -j "$(nproc)" opcache
RUN set -ex; \
  { \
    echo "; Cloud Run enforces memory & timeouts"; \
    echo "memory_limit = -1"; \
    echo "max_execution_time = 0"; \
    echo "; File upload at Cloud Run network limit"; \
    echo "upload_max_filesize = 32M"; \
    echo "post_max_size = 32M"; \
    echo "; Configure Opcache for Containers"; \
    echo "opcache.enable = On"; \
    echo "opcache.validate_timestamps = Off"; \
    echo "; Configure Opcache Memory (Application-specific)"; \
    echo "opcache.memory_consumption = 32"; \
  } > "$PHP_INI_DIR/conf.d/cloud-run.ini"

# Configure PHP for development.
# Switch to the production php.ini for production operations.
# RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# https://github.com/docker-library/docs/blob/master/php/README.md#configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"


# This replaces Supervisored and is a better multi-processed threader
ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.0.1/s6-overlay-noarch.tar.xz /tmp
RUN tar -C / -Jxpf /tmp/s6-overlay-noarch.tar.xz
ADD https://github.com/just-containers/s6-overlay/releases/download/v3.1.0.1/s6-overlay-x86_64.tar.xz /tmp
RUN tar -C / -Jxpf /tmp/s6-overlay-x86_64.tar.xz

# Install Our Dependencies - No Supervisored
RUN apt-get update && apt-get install -y libpq-dev libzip-dev
RUN docker-php-ext-install bcmath pgsql pdo_pgsql zip
RUN apt install -y apache2
RUN apt install -y apache2-utils
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


## APACHE CONFIGURATION
# Use the PORT environment variable in the default Apache configuration files.
# https://cloud.google.com/run/docs/reference/container-contract#port
# RUN sed -i 's/80/8000/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Use our own Apache configuration files and copy the App to where Apache can serve it.
# Note that we can expose port 8000 here or in our my Apache configuration file if we use the proxy location.
# Easier to expose here unless we need specific subdomain or other configurations.
EXPOSE 8000
COPY --from=build /app /var/www/html
COPY myapachesite.conf /etc/apache2/sites-available/000-default.conf
RUN echo "Listen 8000" >> /etc/apache2/ports.conf
RUN chmod 777 -R /var/www/html/storage/ && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite


# We can run the below cache commands if we want to keep cache.
#RUN php artisan config:cache && \
RUN php artisan route:cache && \
php artisan route:clear && \
php artisan view:clear && \
php artisan view:cache


# RUN chmod a+x /app/entrypoint.sh


# ENTRYPOINT ["/app/entrypoint.sh"]
