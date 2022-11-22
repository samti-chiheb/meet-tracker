<?php
namespace App\Models;
use App\Models\Model;

class UsersModel extends Model
{
  protected $id ;
  protected $name ;
  protected $username ;
  protected $email ;
  protected $password ;

  public function __construct(){
    $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
    $this->table = strtolower(str_replace('Model', '', $class));
  }

  public function findOneByEmail(string $email) {
    return $this->setQuery("SELECT * FROM $this->table WHERE email= ? ", [$email])->fetch() ;
  }

  public function setSession() {
    $_SESSION['user'] = [ 'id' => $this->id,
                          'email' => $this->email,
                          'username' => $this->username ];
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
   * Get the value of username
   */ 
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * Set the value of username
   *
   * @return  self
   */ 
  public function setUsername($username)
  {
    $this->username = $username;

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
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of password
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */ 
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }
}