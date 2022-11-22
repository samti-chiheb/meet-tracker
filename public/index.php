<?php
use App\Autoloader;
use App\Core\Main;

require_once '../Core/config.php';
require_once ROOT.'/Autoloader.php';

Autoloader::register();

$app = new Main; // Main is the rooter
$app->start();

