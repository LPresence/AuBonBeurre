DevOps - Au bon beurre

L'intégralité de nos réalisations liés à l'usine d'automates sont disponibles dans le répertoire usine_automate/prod. 
Afin de les utiliser vous dévez préalablement installer Docker et Docker-compose (version 3) sur votre machine ainsi qu'avoir une base de données utilisable avec les colonnes présentés en fin de document.







+----------------------+--------------+------+-----+---------+----------------+
| Field                | Type         | Null | Key | Default | Extra          |
+----------------------+--------------+------+-----+---------+----------------+
| id                   | int(255)     | NO   | PRI | NULL    | auto_increment |
| date                 | varchar(255) | NO   |     | NULL    |                |
| id_unite             | int(255)     | NO   |     | NULL    |                |
| numero_automate      | int(255)     | NO   |     | NULL    |                |
| type_automate        | varchar(255) | NO   |     | NULL    |                |
| temp_cuve            | float        | NO   |     | NULL    |                |
| temp_exterieur       | float        | NO   |     | NULL    |                |
| poids_lait_cuve      | int(255)     | NO   |     | NULL    |                |
| poids_produit_fini   | int(255)     | YES  |     | NULL    |                |
| mesure_ph            | float        | NO   |     | NULL    |                |
| mesure_k             | int(255)     | NO   |     | NULL    |                |
| concent_nacl         | float        | NO   |     | NULL    |                |
| niveau_bact_salmo    | int(255)     | NO   |     | NULL    |                |
| niveau_bact_ecoli    | int(255)     | NO   |     | NULL    |                |
| niveau_bact_listeria | int(255)     | NO   |     | NULL    |                |
+----------------------+--------------+------+-----+---------+----------------+
