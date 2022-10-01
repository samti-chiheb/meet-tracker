<?php
namespace App\Models;
use App\Models\Model;

class UsersModel extends Model
{
  protected $id ;
  protected $name ;
  protected $username ;
  protected $mail ;
  protected $password ;

  public function __construct(){
    $this->table = 'users';
  }
}