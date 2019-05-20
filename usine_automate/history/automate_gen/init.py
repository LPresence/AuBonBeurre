import time
import os

#ce script execute le script des automates toutes les 60 secondes
while True:
    os.system("python automated.py")
    time.sleep(60)
