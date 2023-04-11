FROM centos:centos7

COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

RUN yum update -y
RUN yum install -y http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum install -y --enablerepo=remi,remi-php82 php php-fpm
RUN mkdir -p /run/php-fpm/

WORKDIR "/var/www/app"

COPY app.sh /usr/local/bin/app.sh
COPY ./www.conf /etc/php-fpm.d/www.conf

RUN chmod a+x /usr/local/bin/app.sh

ENTRYPOINT ["bash","-c", "app.sh && /bin/bash"]
CMD [""]