<?php
namespace App\Models;
use App\Models\Model;

class MissionsModel extends Model
{
  protected $id ;
  protected $name ;
  protected $description ;
  protected $startDate ;
  protected $endDate ;
  protected $missionCategory_id ;
  protected $recruiter_id ;
  protected $client_id ;
  protected $user_id ;
  protected $note_id ;

  public function __construct(){
    $this->table = 'missions';
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
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

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
   * Get the value of startDate
   */ 
  public function getStartDate()
  {
    return $this->startDate;
  }

  /**
   * Set the value of startDate
   *
   * @return  self
   */ 
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;

    return $this;
  }

  /**
   * Get the value of endDate
   */ 
  public function getEndDate()
  {
    return $this->endDate;
  }

  /**
   * Set the value of endDate
   *
   * @return  self
   */ 
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;

    return $this;
  }

  /**
   * Get the value of client_id
   */ 
  public function getClient_id()
  {
    return $this->client_id;
  }

  /**
   * Set the value of client_id
   *
   * @return  self
   */ 
  public function setClient_id($client_id)
  {
    $this->client_id = $client_id;

    return $this;
  }

  /**
   * Get the value of missionCategory_id
   */ 
  public function getMissionCategory_id()
  {
    return $this->missionCategory_id;
  }

  /**
   * Set the value of missionCategory_id
   *
   * @return  self
   */ 
  public function setMissionCategory_id($missionCategory_id)
  {
    $this->missionCategory_id = $missionCategory_id;

    return $this;
  }

  /**
   * Get the value of recruiter_id
   */ 
  public function getRecruiter_id()
  {
    return $this->recruiter_id;
  }

  /**
   * Set the value of recruiter_id
   *
   * @return  self
   */ 
  public function setRecruiter_id($recruiter_id)
  {
    $this->recruiter_id = $recruiter_id;

    return $this;
  }

  /**
   * Get the value of note_id
   */ 
  public function getNote_id()
  {
    return $this->note_id;
  }

  /**
   * Set the value of note_id
   *
   * @return  self
   */ 
  public function setNote_id($note_id)
  {
    $this->note_id = $note_id;

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