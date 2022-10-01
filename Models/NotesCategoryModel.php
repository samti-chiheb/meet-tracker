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
}