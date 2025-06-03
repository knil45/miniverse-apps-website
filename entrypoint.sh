#!/bin/sh

cd /var/www/html/miniverse-apps-website

# Set permissions
chown -R www-data:www-data /var/www/html/miniverse-apps-website

exec "$@"
