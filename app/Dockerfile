FROM php:7.3-apache

#RUN apt-get update \
#&& apt-get install -y \
#    libpng-dev \
#    git \
#&& docker-php-ext-install pdo pdo_mysql gd \
#&& a2enmod rewrite \
#&& rm -rf /var/www/html/*

RUN apt-get update \
&& docker-php-ext-install pdo pdo_mysql \
&& a2enmod rewrite \
&& rm -rf /var/www/html/*

COPY ./src /var/www/html

# Install Composer
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
# && composer require phpmailer/phpmailer

# RUN chmod -R 755 /var/www/html/* /var/www/html/.htaccess
# && /etc/init.d/apache2 restart
RUN /etc/init.d/apache2 restart
