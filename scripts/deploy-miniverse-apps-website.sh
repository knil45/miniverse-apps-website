#!/bin/bash
# Copy this file manually to VPS folder /root/apps

APP_DIR=~/apps/miniverse-apps-website
REPO_URL=git@github.com-miniverse-apps-website:knil45/miniverse-apps-website.git
BRANCH=main

if [ ! -d "$APP_DIR" ]; then
  git clone -b $BRANCH $REPO_URL $APP_DIR
else
  cd $APP_DIR
  git pull origin $BRANCH
fi

cd $APP_DIR
npm install
pm2 restart miniverse-apps-website || pm2 start src/index.js --name miniverse-apps-website
