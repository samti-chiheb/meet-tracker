<?php
namespace App\Core;

class Form
{
  private $formCode ='';

  public function creat() {
    return $this->formCode;
  }

  static public function validate(array $form, array $fields) {
    foreach($fields as $field) {
      if(!isset($form[$field]) || empty($form[$field])) {
        return false;
      }
    }
    return true;
  }

}