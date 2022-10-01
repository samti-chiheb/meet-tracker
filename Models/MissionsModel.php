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
}