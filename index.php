<?php
use App\Autoloader;
use App\Models\ClientsModel;
use App\Models\UsersModel;

require_once 'Autoloader.php';

Autoloader::register();


$model = new ClientsModel ;

// var_dump($model->find(1));