#!/bin/bash
php-fpm
echo $(grep `hostname` /etc/hosts | sed -e "s/\([0-9]\s\+.*\)//g")"1 docker-gateway" >> /etc/hosts