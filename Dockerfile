FROM php:5.6-apache
MAINTAINER Troy Daniels  <troyaadaniels@gmail.com>
COPY src/ /var/www/html/
EXPOSE 80
