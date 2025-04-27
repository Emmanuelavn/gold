# Utiliser une image de base PHP
FROM php:8.1-apache

# Copier les fichiers du projet dans le répertoire de l'image Docker
COPY . /var/www/html

# Installer Composer (si nécessaire pour gérer les dépendances PHP)
RUN apt-get update && apt-get install -y \
    unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Exposer le port utilisé par votre serveur
EXPOSE 80
#Exposer mysql 
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
COPY includes /var/www/html/includes
