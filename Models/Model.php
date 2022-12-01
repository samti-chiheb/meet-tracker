<?php
namespace App\Models;
use App\Core\Db;

/**
 * Generic model : a child class of Db class to use CRUD methodes.
 */
class Model extends Db{
  // database table
  protected $table;

  // Db instance
  private $db;

  /**
   * find or get element by id
   */
  public function find(int $id){
    return $this->setQuery("SELECT * FROM {$this->table} Where id = $id")->fetch();
  }

  /**
   * get all element from database
   */
  public function findAll(){
    $sql = 'SELECT * FROM '.$this->table;
    $query = $this->setQuery($sql);

    return $query->fetchAll();
  }

  /**
   * get elements by criteria
   */
  public function findBy(array $criteria){
    $keys = [];
    $values = [];
    
    // loop to explode the criteria array
    foreach ($criteria as $key => $value) {
      $keys[]="$key = ?";
      $values[]= $value;
    }

    // transfrom keys array into string
    $keysStr = implode('AND ' , $keys );
  
    //execute query 
    return 
      $this->setQuery('SELECT * FROM '.$this->table.' WHERE '.$keysStr, $values )->fetchAll();
  }

  public function create(){
    $keys = [];
    $inter = [];
    $values = [];
    
    foreach ($this as $key => $value) {
      if($value !== null && $key != 'db' && $key != 'table'){
        $keys[]=$key ;
        $inter[]="?";
        $values[]= $value;
      }
    }

    $keysStr = implode(', ' , $keys );
    $insterStr = implode(', ', $inter);

    return $this->setQuery('INSERT INTO '.$this->table.' ('.$keysStr.') 
                          VALUES ('. $insterStr.')', $values );
  }

  /**
   * update methode
   */
  public function update(){
    $keys = [];
    $values = [];
    
    foreach ($this as $key => $value) {
      if($value !== null && $key != 'db' && $key != 'table'){
        $keys[]="$key = ?" ;
        $values[]= $value;
      }
    }

    $values[] = $this->id ;
    $liste_keys = implode(', ' , $keys );
    
    return $this->setQuery('UPDATE '.$this->table.' SET '.$liste_keys.'WHERE id = ?', $values );
  }

  /**
   * delete methode
   */
  public function delete($id){
    return $this->setQuery("DELETE FROM {$this->table} WHERE id = ?", [$id]);
  }

  /**
   * prepare and execute query
   */
  protected function setQuery(string $sql, array $attributes = null) {
    //get Db instance
    $this->db = Db::getInstance();

    //check if attributes = null or not
    if($attributes !== null){
      //prepered query
      $query = $this->db->prepare($sql);
      $query->execute($attributes);
      return $query;
    }else{
      //simple query
      return $this->db->query($sql);
    }
  }

  /**
   * hydrate query
   */
  public function hydrate($donnees){
    foreach ($donnees as $key => $value){
      $setter = 'set'.ucfirst($key);
      if(method_exists($this, $setter)){
        $this->$setter($value);
      }
    }
    return $this;
  }

}