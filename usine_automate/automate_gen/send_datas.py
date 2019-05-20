import socket

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("", 1111))

print("Le nom du fichier que vous allez envoyer au serveur :")
file = input(">> ") # utilisez raw_input() pour les anciennes versions python
with open(file, 'rb') as _file:
    s.send(_file.read())

print("Le fichier a ete correctement ete envoye au serveur : %s." % file)

s.recv(2048)

