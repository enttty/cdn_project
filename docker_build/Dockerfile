FROM php:7.2-apache

# moving admin tools into image
COPY ./apache_conf/.bashrc /root/.bashrc
RUN apt-get update;apt-get install nano

# copy apache config and www-data
COPY ./apache_conf/site.conf /etc/apache2/sites-available/000-default.conf
COPY ./apache_conf/docker.conf /etc/apache2/conf-available/docker-php.conf

# copy www-data (!!TODO:replace this by mounting storage, move files there!!)
COPY ./public-html/ /var/www/html/
COPY ./template/ /var/www/template/


#RUN mv /var/www/html/docker-php.conf /etc/apache2/conf-available/docker.conf

