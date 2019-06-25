pipeline {
  environment {
    registry = "kaluspresence/u-bon-beurre"
    registryCredential = 'dockerhub'
    dockerImage = ''
  }
  agent any
  stages {
    stage('Cloning Git') {
      steps {
        git 'https://github.com/LPresence/AuBonBeurre.git'
      }
    }
    stage('Building image automate') {
      steps{
        script {
          dir("usine_automate/prod/automate/") {
            dockerImageAtm = docker.build registry + ":automate-latest"
          }
        }
      }
    }
    stage('Building image server') {
      steps{
        script {
          dir("usine_automate/prod/concentrateur/") {
            dockerImageSrv = docker.build registry + ":server-latest"
          }
        }
      }
    }
    stage('Run tests') {
        steps{
            sh "docker run --name automate-test -d $registry:automate-latest "
            sh "docker exec automate-test /bin/bash  -c 'python --version '"
            sh "docker exec automate-test /bin/bash  -c \"cd /usr/src/app && nose2\""
            sh "docker rm -f automate-test"
        }
    }
    stage('Deploy Image automate') {
      steps{
         script {   
            docker.withRegistry( '', registryCredential ) {
            dockerImageAtm.push()
            dockerImageSrv.push()
         }
        }
      }
    }
    stage('Remove Unused docker image') {
      steps{
        sh "docker image prune -f"
      }
    }
    stage('Deploy') {
      steps{
        sh "ssh jenkins-user@54.38.240.160 mkdir -p /home/jenkins-user/tempo/prod"
        sh "ssh jenkins-user@54.38.240.160 'cd /home/jenkins-user/tempo/prod && wget https://raw.githubusercontent.com/LPresence/AuBonBeurre/master/usine_automate/prod/docker-compose.yml'"
        sh "ssh jenkins-user@54.38.240.160 'cd /home/jenkins-user/tempo/prod && docker-compose down && docker-compose up -d && rm -rf /home/jenkins-user/tempo'"
      }
    }
  }
}
