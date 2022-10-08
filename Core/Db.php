<?php
namespace App\Core;

use PDO;
use PDOException;

/**
 * connect to database using "singleton" design pattern
 */
class Db extends PDO{
  // unique instance of the class 
  private static $instance;

  //Connection info from config file
  private const DBHOST = 'localhost';
  private const DBUSER = 'root';
  private const DBPASS = '';
  private const DBNAME = 'meet_tracker';

  private function __construct(){
    // Data Source Name connection
    $_dsn = 'mysql:dbname='.self::DBNAME.'; host='.self::DBHOST;

    // call PDO contractor
    try {
      parent::__construct($_dsn, self::DBUSER, self::DBPASS);

      //modifie existing attribute
      $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
      $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public static function getInstance(){
    if(self::$instance === null){
      self::$instance = new self();
    } 
    return self::$instance ;
  }
}