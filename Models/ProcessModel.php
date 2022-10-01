<?php
namespace App\Models;
use App\Models\Model;

class ProcessModel extends Model
{
  protected $id ;
  protected $name ;
  protected $user_id ;

  public function __construct(){
    $this->table = 'process';
  }
}