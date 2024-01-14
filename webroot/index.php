<?php


require ('../vendor/autoload.php');

use Model\User as UserManager;
use Entity\User as UserEntity;
use Others\Configuration;

error_reporting(E_ALL);

ini_set('display_errors', 1);

ini_set('log_errors', 1);
ini_set('error_log', dirname(dirname(__DIR__)) . '/log/erreurs.log');

try {
    Configuration::init();
    Configuration::renderPage();

    
}catch (Exception $e) {
    echo "". $e->getMessage() ."";
}


?>