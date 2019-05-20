import time
import os

#Execution du script de generation et d envoi de donnees toutes les 60 secondes
while True:
    os.system("python automated.py")
    time.sleep(60)
