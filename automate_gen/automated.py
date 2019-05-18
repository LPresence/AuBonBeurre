import socket # pour hostname
import calendar
import time
import random
import json 


#Hostname doit etre "id_unite"
id_unite = 1 #pour le moment, sinon (socket.gethostname())[0].encode('utf-8')
liste_type_automt = [0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F']
data = {}

#generation du nom du fichier 
f = "paramunite_"+str(id_unite)+"_"+str(calendar.timegm(time.gmtime()))+".json"

with open(f, "w+") as outfile:
    i = 0
    while i < 10:
        data['unite']={
            'id_unite': id_unite,
            'numero_automate': i ,
            'type_automate': '0X000BA2'+str(random.choice(liste_type_automt)),
            'temp_cuve': round(random.uniform(2.5,4.0), 1),
            'temp_exterieur': round(random.uniform(8.0,14.0), 1),
            'poids_lait_cuve': random.randrange(3512,4607,1),
            'poids_produit_fini': 'poids_lait_cuve',
            'mesure_ph': round(random.uniform(6.8,7.2), 1),
            'mesure_k': random.randrange(35,47,1),
            'concent_nacl': round(random.uniform(1.0,1.7), 1),
            'niveau_bact_salmo': random.randrange(17,37,1),
            'niveau_bact_ecoli': random.randrange(35,49,1),
            'niveau_bact_listeria': random.randrange(28,54,1)
            },
        i = i+1
        json.dump(data, outfile,indent=1)

