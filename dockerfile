# Base image
FROM php:8.3-fpm

# Working directory
WORKDIR /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html
