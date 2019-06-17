pipeline {
    agent { docker { image 'python:3.7-alpine' } }
    stages {
        stage('build') {
            steps {
                sh 'python ./init.py'
            }
        }
    }
}
