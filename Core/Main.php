<?php
namespace App\Core;
use App\Controllers\MainController;

/**
 * principal rooter
 */
class Main
{
  public function start() {    
  //remove trailling slash from URL

    //get url
    $uri = $_SERVER['REQUEST_URI'];
    
    //check if uri !empty and there is slash at the end
    if(!empty($uri) && $uri != URL.'/' && $uri[-1] === "/"){
      //remove last slash
      $uri = substr($uri, 0, -1) ;

      http_response_code(301);
      header('location: '.$uri);
    }
    

    //manage params
    $params = explode('/', $_GET['p']);

    if($params[0] != '') {


      //get controller namespace wish is 1firt param and instantiate a class
      $controller = '\\App\\Controllers\\'.ucfirst(array_shift(($params)).'Controller') ;
      
      if(class_exists($controller)){
        $controller = new $controller();
  
        //get second url param to use as class method
        $action =(isset($params[0])) ? array_shift($params) :'index';

        //todo : verifie no params render. redirect if there is params reqruired but no params entred exemple ( read($id) ) 
        if(method_exists($controller, $action)){
          // verifie if there is others params to set for a methode
          (isset($params[0])) ? 
          call_user_func_array([$controller, $action], $params) 
          : $controller->$action();
        }else{
          http_response_code(404);
          echo "this page do not exist";
        }
      }else{
        http_response_code(404);
        echo "this page do not exist";
      }

      
    }else{
      $controller = new MainController;

      $controller->index();
    }

  }
}