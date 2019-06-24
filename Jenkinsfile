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
    stage('Building image') {
      steps{
        script {
          dir("usine_automate/prod/automate/") {
            dockerImage = docker.build registry + ":$BUILD_NUMBER"
          }
        }
      }
    }
    stage('Run tests') {
        steps{
            sh "docker run --name automate-test -d $registry:$BUILD_NUMBER "
            sh "docker exec automate-test /bin/bash  -c 'python --version '"
            sh "docker exec automate-test /bin/bash  -c \"cd /usr/src/app && nose2\""
            sh "docker rm -f automate-test"
        }
    }
    stage('Deploy Image') {
      steps{
         script {   
            docker.withRegistry( '', registryCredential ) {
            dockerImage.push()
         }
        }
      }
    }
    stage('Remove Unused docker image') {
      steps{
        sh "docker rmi $registry:$BUILD_NUMBER"
      }
    }
  }
}
