<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/class"), $isDevMode);
// database configuration parameters
$conn = array(
    'host'=>'localhost',
    'driver'=>'pdo_mysql',
    'user'=>'root',
    'password'=>'',
    'dbname'=>'m4trix'
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

?>
