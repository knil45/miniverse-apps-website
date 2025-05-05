#!/bin/bash
# Copy this file manually to VPS folder /var/www

APP_DIR=/var/www/miniverse-apps-website
REPO_URL=git@github.com-miniverse-apps-website:knil45/miniverse-apps-website.git
BRANCH=main

# Pull changes
git pull origin $BRANCH

# Refresh npm
cd $APP_DIR
npm install

# Restart server
pm2 miniverse-apps-website
