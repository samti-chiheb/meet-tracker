<?php
namespace App\Models;
use App\Models\Model;

class NotesModel extends Model
{
  protected $id ;
  protected $title ;
  protected $description ;
  protected $noteCategory_id ;
  protected $user_id ;

  public function __construct(){
    $this->table = 'notes';
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
   * Get the value of title
   */ 
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */ 
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of noteCategory_id
   */ 
  public function getNoteCategory_id()
  {
    return $this->noteCategory_id;
  }

  /**
   * Set the value of noteCategory_id
   *
   * @return  self
   */ 
  public function setNoteCategory_id($noteCategory_id)
  {
    $this->noteCategory_id = $noteCategory_id;

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