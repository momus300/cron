#!/bin/bash
echo 'leci wdrozenie';
cd /var/www/html/cron;

git add .;
git commit -m 'deploy przez phinga';
git push origin master;

