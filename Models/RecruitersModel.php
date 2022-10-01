<?php
namespace App\Models;
use App\Models\Model;

class RecruitersModel extends Model
{
  
  protected $id ;
  protected $name ;
  protected $email ;
  protected $phone ;
  protected $description ;
  protected $user_id ;
  protected $note_id ;

  public function __construct(){
    $this->table = 'recruiters';
  }
}