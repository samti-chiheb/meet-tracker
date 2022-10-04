<?php
namespace App\Models;
use App\Models\Model;

class NotesCategoryModel extends Model
{
  protected $id ;
  protected $category ;
  protected $user_id ;

  public function __construct(){
    $this->table = 'notes_category';
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of category
   */ 
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of category
   *
   * @return  self
   */ 
  public function setCategory($category)
  {
    $this->category = $category;

    return $this;
  }

  /**
   * Get the value of user_id
   */ 
  public function getUser_id()
  {
    return $this->user_id;
  }

  /**
   * Set the value of user_id
   *
   * @return  self
   */ 
  public function setUser_id($user_id)
  {
    $this->user_id = $user_id;

    return $this;
  }
}