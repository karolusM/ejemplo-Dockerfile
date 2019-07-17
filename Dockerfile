FROM php:7.0-apache
LABEL Description = "Imagen base para desarrollo PHP"

RUN mkdir /app && chown -R www-data /app && ln -s /app /var/www/html/app

WORKDIR /app
COPY $PWD/sw_ejemplo.conf /etc/apache2/sites-available/sw_ejemplo.conf

RUN a2dissite 000-default && a2ensite sw_ejemplo &&  a2enmod rewrite


