<?php
namespace App\Models;
use App\Models\Model;

class ClientsModel extends Model
{
  protected $id ;
  protected $name ;
  protected $email ;
  protected $phone ;
  protected $description ;
  protected $recruiter_id ;
  protected $user_id ;
  protected $note_id ;

  public function __construct(){
    $this->table = 'clients';
    
  }
}