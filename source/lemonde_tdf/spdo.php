<?php

define('BDD_HOST', '54.37.11.254');   // aquabdd
define('BDD_LOGIN', 'clem');       // n° étudiant
define('BDD_MDP', 'clems12');             // password étudiant
define('BDD_DATABASE', 'VainqueurTDF');     // promotion16
define('BDD_DRIVER', 'pgsql');     // pgsql

class SPDO{
  private $PDOInstance = null;
  private static $instance = null;
  
  private  function __construct(){
    try {
      $this->PDOInstance = new PDO(BDD_DRIVER.':dbname='.BDD_DATABASE.';host='.BDD_HOST, BDD_LOGIN, BDD_MDP);
      $this->PDOInstance->query('SET NAMES utf8');
  	  $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
      die('<p>La connexion a échoué. Erreur['.$e->getCode().'] : '.$e->getMessage().'</p>');
    }
  }
  
  public static function getDB(){  
    if (is_null(self::$instance))
      self::$instance = new SPDO();
    return self::$instance;
  }
  
  public function query($query){
    return $this->PDOInstance->query($query);
  }
  
  public function prepare($query){
    return $this->PDOInstance->prepare($query);
  }
  
  public function lastInsertId($name=''){
    return $this->PDOInstance->lastInsertId($name);
  }
  
}



?>