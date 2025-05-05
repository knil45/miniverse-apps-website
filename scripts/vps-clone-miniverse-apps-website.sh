#!/bin/bash
# Copy this file manually to VPS folder /var/www
# This file should be executed manually

APP_DIR=/var/www/miniverse-apps-website
REPO_URL=git@github.com-miniverse-apps-website:knil45/miniverse-apps-website.git
BRANCH=main

# Clone repository
git clone -b $BRANCH $REPO_URL $APP_DIR

# Init npm
cd $APP_DIR
npm install

# Start server
pm2 start index.js --name miniverse-apps-website

# Save config
pm2 save
