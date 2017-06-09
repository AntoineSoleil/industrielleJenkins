pipeline {
    agent any
    stages {
        stage('Test') {
            steps {
               git 'https://github.com/AntoineSoleil/industrielleJenkins.git'
               sh 'composer install'
            }
        }
        stage('Deployement') {
            steps {
                echo 'deploy'
            }
        }
    }
}
