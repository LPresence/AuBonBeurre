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
    stage('Deploy Image') {
      steps{
         script {   
            docker.withRegistry( '', registryCredential ) {
            dockerImage.push()
         }
        }
      }
    }
    stage('Change actual docker image') {
      steps{
        sh "bash "
      }
    }
    stage('Remove Unused docker image') {
      steps{
        sh "docker rmi $registry:$BUILD_NUMBER"
      }
    }
  }
}
