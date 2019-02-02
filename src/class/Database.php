<?php
/*
$host = 'jonque.u-bourgogne.fr';
$db   = 'm4trix';
$user = 'm4trix';
$pass = 'Oe8zo0kaez';
$charset = 'utf8mb4';
*/
$host = 'localhost';
$db   = 'm4trix';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

class Db
{
  protected $base;

  public function __construct(){
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
         $this->base = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
       }
  }

  public function getBase()
  {
    return $this->base;
  }

}

?>
