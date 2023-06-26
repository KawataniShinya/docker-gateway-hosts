#!/bin/bash
php-fpm
echo $(grep `hostname` /etc/hosts | sed -e "s/\s\+.*//g" | sed -e "s/\.\([0-9]\+\)$//g")".1 docker-gateway" >> /etc/hosts