import subprocess
import calendar
import time

username = 'administrateur_delegue'
password = 'expand'
database = 'devops'

date = calendar.timegm(time.gmtime()) 
dumpname = 'database_usine'+str(date)+'.sql'

with open(dumpname,'w+') as output:
  c = subprocess.Popen('mysqldump -u ' + username + ' -p' + password + ' ' +database,
                       stdout=output, shell=True)
