FROM php:7.4-apache

RUN sed -i 's/80/8080/' /etc/apache2/ports.conf
RUN sed -i 's/:80/:8080/' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

EXPOSE 8080
