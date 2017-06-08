node {
    stage("Test") {
       git 'https://github.com/AntoineSoleil/industrielleJenkins.git'
       sh 'composer install'
    }
    stage("Deployement") {
        echo 'deploy'
    }
}
