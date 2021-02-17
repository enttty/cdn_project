FROM php:7.2-apache

# moving admin tools into image
COPY ./apache_conf/.bashrc /root/.bashrc
RUN apt-get update
RUN apt-get -y install nano rsync
RUN apt-get -y install iputils-ping tree
#RUN apt-get -y install ping


# copy apache config and www-data
COPY ./apache_conf/site.conf /etc/apache2/sites-available/000-default.conf
COPY ./apache_conf/master.conf /etc/apache2/sites-available/000-default-master.conf

# copy www-data (frontpage for user) 
COPY ./public-html/ /var/www/html/

# copy template files (different header, footer and style for user and admin)
COPY ./template/ /var/www/template/

RUN printenv
RUN mkdir -v -m 777 /var/share
RUN mkdir -v -m 777 /var/www/html/example
#RUN mount -v --source /var/share --target /var/www/html/example

