# DevOps - Au bon beurre

L'intégralité de nos réalisations liés à l'usine d'automates sont disponibles dans le répertoire usine_automate/prod. 
Afin de les utiliser vous dévez préalablement installer Docker et Docker-compose (version 3) sur votre machine ainsi qu'avoir une base de données utilisable avec les colonnes :

> id date id_unite numero_automate type_automate temp_cuve temp_exterieur poids_lait_cuve poids_produit_fini mesure_ph mesure_k concent_nacl niveau_bact_salmo niveau_bact_ecoli niveau_bact_listeria 

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








