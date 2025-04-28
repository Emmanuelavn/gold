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
RUN chmod -R 755 /var/www/html
ENV DB_HOST=mysql
ENV DB_USER=root
ENV DB_PASS=''
ENV DB_NAME=petrolm_db
CMD service mysql start && apache2-foreground

RUN apt-get update && apt-get install -y mysql-server mysql-client

RUN mysqladmin -u root -p status
# Utiliser une image de base PHP avec Apache
FROM php:8.1-apache

# Installer les dépendances nécessaires, y compris MySQL
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    mysql-server \
    mysql-client

# Installer Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer l'extension mysqli pour PHP
RUN docker-php-ext-install mysqli

# Activer le module rewrite pour Apache
RUN a2enmod rewrite

# Fixer les permissions sur les fichiers du projet
RUN chmod -R 755 /var/www/html

# Copier les fichiers du projet dans le répertoire web
COPY . /var/www/html

# Définir des variables d'environnement pour la base de données
ENV DB_HOST=127.0.0.1
ENV DB_USER=root
ENV DB_PASS=''
ENV DB_NAME=petrolm_db

# Démarrer MySQL et Apache au lancement du conteneur
CMD service mysql start && apache2-foreground
