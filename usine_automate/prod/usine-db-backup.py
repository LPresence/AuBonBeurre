import subprocess

username = 'automate_worker'
password = 'Pksdj87Gtfucb'
database = 'devops'

with open('databaseUSINE.sql','w+') as output:
  c = subprocess.Popen('mysqldump -u ' + username + ' -p' + password + ' ' +database,
                       stdout=output, shell=True)
