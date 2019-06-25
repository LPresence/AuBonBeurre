# DevOps - Au bon beurre

L'intégralité de nos réalisations liés à l'usine d'automates sont disponibles dans le répertoire usine_automate/prod. 

Afin de les utiliser vous dévez préalablement installer Docker et Docker-compose (version 3) sur votre machine ainsi qu'avoir importé la base de données présente dans ./usine_automate/prod/donnees_automate.sql. 

La connexion a la base de données doit etre modifiée par rapport à votre configuration (ip, user, password, port) dans le fichier ./usine_automate/prod/concentrateur/workerServer.py:34

## Start
Afin de construire le projet, placez vous le dossier ./usine_automate/prod/ et executez : 
> $ docker-compose up -d

Si vous souhaitez construire les images sur votre machine :
## 1 
Se rendre dans le dossier ./usine_automate/prod/concentrateur/ et executer 
> $ docker build -t workerserver:1.0 .

## 2 
Se rendre dans le dossier ./usine_automate/prod/automate/ et executer 
> $ docker build -t automate:1.0 .

## 3
Se rendre dans le dossier ./usine_automate/prod/ et executer 
> $ docker-compose up -d

## Logs
Vous pouvez vérifier que les 6 conteneurs tournent en executant 
> $ docker ps 

Les logs sont disponibles en executant

> $ docker logs -f automate{1-5} ou $ docker logs -f workerServer








