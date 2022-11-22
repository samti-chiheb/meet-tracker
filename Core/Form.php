<?php
namespace App\Core;

class Form
{
  private $formCode ='';

  public function creat() {
    return $this->formCode;
  }

  public static function validate(array $form, array $fields) {
    foreach($fields as $field) {
      // on verifie si le field est absent ou vide 
      if(!isset($form[$field]) || empty($form[$field]) ) {
        return false ;
      }
    }
    return true ;
  }

  public function  addAttributs(array $attributes): string {
    $str = '';
    // short attributes
    $shorts = ['checked', 'disabled', 'readonly', 'multiple', 'required', 'autofocus', 
    'novalidate', 'formnovalidate'];

    foreach ($attributes as $attribute => $value){
      if(in_array($attributes, $shorts) && $value == true){
        $str .= " $attribute" ;   
      }else{
        $str .= " $attribute = '$value'";
      }
    }
    return $str;
  }

  public function startForm(string $method= 'post', string $action= '#', array $attributes=[] ): self {
    $this->formCode .= "<form method='$method' action='$action' " ;
    $this->formCode .= $attributes ? $this->addAttributs($attributes).'>': '>';
    return $this;
  }

  public function endForm() :self {
    $token = md5(uniqid());
    $this->formCode .= " <input type='hidden' name='token' value='$token'>";
    $this->formCode .= "</form>";
    $_SESSION['token'] = $token;

    return $this;
  }
}