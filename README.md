# Movie App

## Introduction

Cette application permet de visualiser les films tendances du jour ou du mois et de voir les détails d'un film.

## Prérequis

- PHP 7.4 ou plus récent
- Composer
- Docker
- Git

## Installation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/codeurcasa2024/movie-app.git
   cd movie-app

## Copiez le fichier .env.example en .env :
cp .env.example .env

## Installez les dépendances :
composer install

## Lancez Sail pour démarrer les services Docker :
./vendor/bin/sail up -d

## Générez la clé de l'application :
./vendor/bin/sail artisan key:generate

## Exécutez les migrations :
./vendor/bin/sail artisan migrate


## Utilisation
L'application est maintenant accessible à l'adresse http://localhost.

## Accès restreint au backoffice : 
Utilisation de Jetstream pour l'authentification. Vous pouvez utiliser les identifiants suivants pour accéder au backoffice :
identifiant: amine
Mot de passe: amine1234

Backup de la base de données
Si nécessaire, un fichier de backup de la base de données est fourni dans le dossier backup avec le nom database_backup.sql. Pour restaurer la base de données, utilisez la commande suivante :

mysql -u [username] -p [database_name] < backup/database_backup.sql


## Documentation des API
Nous utilisons l'API de The Movie Database themoviedb. Pour plus d'informations, consultez la documentation.
https://developer.themoviedb.org/docs/getting-started


## Contact
Pour toute question, veuillez me contacter à drive.amine.elyamani@gmail.com
