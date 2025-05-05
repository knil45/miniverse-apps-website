#!/bin/bash
# Copy this file manually to VPS folder /var/www

APP_DIR=/var/www/miniverse-apps-website
REPO_URL=git@github.com-miniverse-apps-website:knil45/miniverse-apps-website.git
BRANCH=main

cd $APP_DIR

# Pull changes
git pull origin $BRANCH

# Refresh npm
npm install

# Restart server
sudo systemctl restart php8.3-fpm
