<?php
namespace App\Controllers;


class MainController extends Controller
{
  public function index() {
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
      $this->render('main/index');
    }else{
      $this->render('main/index',[],"home");
    }

  }

}