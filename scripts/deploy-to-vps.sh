#!/bin/bash

APP_DIR=~/apps/miniverse-website
REPO_URL=git@github.com:knil45/miniverse-apps-website.git
BRANCH=master

if [ ! -d "$APP_DIR" ]; then
  git clone -b $BRANCH $REPO_URL $APP_DIR
else
  cd $APP_DIR
  git pull origin $BRANCH
fi

cd $APP_DIR
npm install
pm2 restart miniverse-website || pm2 start src/index.js --name miniverse-website
