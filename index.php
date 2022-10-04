<?php
use App\Autoloader;
use App\Models\UsersModel;

require_once 'Autoloader.php';

Autoloader::register();


$model = new UsersModel ;

$model->setName("fourat")
      ->setUsername("fifi")
      ->setPassword("fifi");


$model->create();