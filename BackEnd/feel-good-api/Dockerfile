FROM php:7.2-apache

WORKDIR /var/www/html/
COPY composer.json /var/www/html/
COPY apache.conf /etc/apache2/sites-enabled/

# ADD . /var/www/html

RUN rm /etc/apache2/sites-enabled/000-default.conf \
  && a2enmod rewrite

# install linux extensions
RUN apt-get update && apt-get install -y \
    unzip \
    wget \
    ntp \
    gnupg \
    zip \
    git \
    libpq-dev 

# instal docker extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql

# this puts the vendor bin propeinto the global path
ENV PATH="$PATH:~/.composer/vendor/bin:./vendor/bin"


