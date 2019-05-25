import socket 
import calendar
import time
import random
import json 


#Hostname doit etre "id_unite"
id_unite = (socket.gethostname())[0]
#Liste valeurs possible en hexadecimal
liste_type_automt = [0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F']
#variable data pour fichier json
data = {}
#Date epoch unix
date_str = str(calendar.timegm(time.gmtime())) 
#Date format 
format_date = time.strftime('%Y-%m-%d %H:%M:%S', time.localtime(calendar.timegm(time.gmtime())))
#generation du nom du fichier 
f = "paramunite_"+str(id_unite)+"_"+date_str+".json"

#Boucle creation fichier
with open(f, "w+") as outfile:
    i = 1

    array = []
    while i < 11:
        data={
                    'id_unite': id_unite,
                    'numero_automate': i ,
                    'type_automate': '0X000BA2'+str(random.choice(liste_type_automt)),
                    'temp_cuve': round(random.uniform(2.5,4.0), 1),
                    'temp_exterieur': round(random.uniform(8.0,14.0), 1),
                    'poids_lait_cuve': random.randrange(3512,4607,1),
                    'poids_produit_fini': 0,            
                    'mesure_ph': round(random.uniform(6.8,7.2), 1),            
                    'mesure_k': random.randrange(35,47,1),            
                    'concent_nacl': round(random.uniform(1.0,1.7), 1),            
                    'niveau_bact_salmo': random.randrange(17,37,1),            
                    'niveau_bact_ecoli': random.randrange(35,49,1),            
                    'niveau_bact_listeria': random.randrange(28,54,1),
                    'date' : format_date
            },
        i = i+1
        array.append(data)

    #Ecriture du fchier 
    json.dump(array, outfile,indent=1)


#Partie envoi de donnees
#Connexion 
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("172.30.0.10", 1111)) 
file = f  
#Envoi
with open(file, 'rb') as _file: 
    s.send(_file.read()) 

print("Le fichier a ete correctement ete envoye au serveur : %s." % file) 

s.recv(2048)
