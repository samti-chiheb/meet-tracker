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
}