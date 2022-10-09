<?php
namespace App\Controllers;


abstract class Controller
{
  public function render(string $file, array $data = [], string $template='default') {
    //extract data
    extract($data);

    //start output buffer
    ob_start();

    //creat root to view
    require_once ROOT.'/Views/'.$file.'.php';
    
    //transfer buffer to a variable (content)
    $content = ob_get_clean();

    //template page
    require_once ROOT.'/Views/'.$template.'.php';
  }
}