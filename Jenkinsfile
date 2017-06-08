node {
    stage("Test") {
        // Run `composer update` as a shell script
       // sh 'composer install'
        echo 'test'
    }
    stage("deployment") {
       git  'https://github.com/AntoineSoleil/industrielleJenkins.git'
      //  sh 'vendor/bin/phpunit'
    }
}
