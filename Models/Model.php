<?php
namespace App\Models;
use App\Db\Db;


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
    // $sql = 'SELECT * FROM '.$this->table;
    // $query = $this->setQuery($sql);

    $query = $this->setQuery('SELECT * FROM '.$this->table);

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
    $strKeys = implode('AND ' , $keys );
  
    //execute query 
    return 
      $this->setQuery('SELECT * FROM '.$this->table.' WHERE '.$strKeys, $values )->fetchAll();
  }

  public function create(){
    $champs = [];
    $inter = [];
    $valeurs = [];
    
    // on boucle pour eclater le tablau 
    foreach ($this as $champ => $valeur) {
      // INSERT INTO annonces (champs) VALUES (valeur, ?, ?, ? )
      if($valeur !== null && $champ != 'db' && $champ != 'table'){
        $champs[]=$champ ;
        $inter[]="?";
        $valeurs[]= $valeur;
      }
    }
    // on transforme le tableau "champ" en chaine de caractere 
    $liste_champs = implode(', ' , $champs );
    $list_inter = implode(', ', $inter);

    //on execute la setQuery 
    return $this->setQuery('INSERT INTO '.$this->table.' ('.$liste_champs.') 
                          VALUES ('. $list_inter.')', $valeurs );
  }

  //update methode
  public function update(){
    $champs = [];
    $valeurs = [];
    
    // on boucle pour eclater le tablau 
    foreach ($this as $champ => $valeur) {
      // UPDATE annonces SET Titre = ?, description = ? , ... WHERE id = ?
      if($valeur !== null && $champ != 'db' && $champ != 'table'){
        $champs[]="$champ = ?" ;
        $valeurs[]= $valeur;
      }
    }
    $valeurs[] = $this->id ;
    // on transforme le tableau "champ" en chaine de caractere 
    $liste_champs = implode(', ' , $champs );
    //on execute la setQuery 
    return $this->setQuery('UPDATE '.$this->table.' SET '.$liste_champs.'WHERE id = ?', $valeurs );
  }
  
  //delete function
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

  // methode hydrate
  public function hydrate($donnees){
    foreach ($donnees as $key => $value){
      // on recupere le nom du setter corresspondant a la clé (key)
      // titre -> setTitre
      $setter = 'set'.ucfirst($key);

      //on verifie si le seter existe
      if(method_exists($this, $setter)){
        // on appelle le setter
        $this->$setter($value);
      }
    }
    return $this;
  }

}