# coding: utf-8
import mysql.connector
import socket
import threading
import json

#Code trouve en partie sur internet pour la gestion du serveur avec utilisation de threads pour gerer lusieurs demandes en simultane
class ClientThread(threading.Thread):

    def __init__(self, ip, port, clientsocket):
        threading.Thread.__init__(self)
        self.ip = ip
        self.port = port
        self.clientsocket = clientsocket
        print("[+] Nouveau thread pour %s %s" % (self.ip, self.port,))

    def run(self):
        print("Connexion de %s %s" % (self.ip, self.port,))

        r = self.clientsocket.recv(99999)
        print("Ouverture du fichier", "...")
        print(r.decode('utf-8'))

        self.clientsocket.send('Fichier correctement recu'.encode('utf-8'))
        
        #lecture des donnees json recues
        decoded = json.loads(r.decode('utf-8'))
        i=0
        #connexion a la bdd pour chaque igne du fichier json
        for automates in decoded:
            print(automates)
            for automate in automates:
                print(automate["id_unite"])
                cnx = mysql.connector.connect(user='automate_worker', password='Pksdj87Gtfucb', host='172.30.0.1', database='devops')
                cursor = cnx.cursor()
                #insertion données date epoch a modifier et poids lait comparaison a faire
                insert_data = ("INSERT INTO donnees_automates " 
                               "(date, id_unite, numero_automate, type_automate, temp_cuve, temp_exterieur, poids_lait_cuve, mesure_ph, mesure_k, concent_nacl, niveau_bact_salmo, niveau_bact_ecoli, niveau_bact_listeria  )"
                               "VALUES (%(date)s, %(id_unite)s, %(numero_automate)s, %(type_automate)s, %(temp_cuve)s, %(temp_exterieur)s, %(poids_lait_cuve)s, %(mesure_ph)s, %(mesure_k)s, %(concent_nacl)s, %(niveau_bact_salmo)s, %(niveau_bact_ecoli)s, %(niveau_bact_listeria)s)" 
                              )
                data = {
                        'date':automate['epoch'],
                        'id_unite':automate['id_unite'],
                        'numero_automate':automate['numero_automate'],
                        'type_automate':automate['type_automate'],
                        'temp_cuve':automate['temp_cuve'],
                        'temp_exterieur':automate['temp_exterieur'],
                        'poids_lait_cuve':automate['poids_lait_cuve'],
                        'mesure_ph':automate['mesure_ph'],
                        'mesure_k':automate['mesure_k'],
                        'concent_nacl':automate['concent_nacl'],
                        'niveau_bact_salmo':automate['niveau_bact_salmo'],
                        'niveau_bact_ecoli':automate['niveau_bact_ecoli'],
                        'niveau_bact_listeria':automate['niveau_bact_listeria']
                        }

                cursor.execute(insert_data, data)
                cnx.commit()
                print(cursor.lastrowid)
                cnx.close()

        print("Client déconnecté...")


tcpsock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
tcpsock.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
tcpsock.bind(("", 1111))

while True:
    tcpsock.listen(10)
    print("En écoute...")
    (clientsocket, (ip, port)) = tcpsock.accept()
    newthread = ClientThread(ip, port, clientsocket)
    newthread.start()
