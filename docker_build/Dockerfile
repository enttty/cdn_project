FROM php:7.2-apache

# moving admin tools into image
COPY ./apache_conf/.bashrc /root/.bashrc
RUN apt-get update
RUN apt-get -y install nano rsync

# copy apache config and www-data
COPY ./apache_conf/site.conf /etc/apache2/sites-available/000-default.conf
COPY ./apache_conf/docker.conf /etc/apache2/conf-available/docker-php.conf
COPY ./apache_conf/php.ini /usr/local/etc/php/php.ini


# copy www-data (!!TODO:replace this by mounting storage, move example files there!!)
COPY ./public-html/ /var/www/html/

# template files will stay inside image
COPY ./template/ /var/www/template/
# File does not exist: /var/www/html/template/cdn-frontend/style.css

#RUN mv /var/www/html/docker-php.conf /etc/apache2/conf-available/docker.conf

