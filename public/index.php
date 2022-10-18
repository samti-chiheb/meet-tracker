<?php
use App\Autoloader;
use App\Core\Main;

define('ROOT', dirname(__DIR__));
define('URL', '/projectsIndex/meet-tracker/public');
define('STYLES', URL.'/styles');
define('SCRIPTS', URL.'/scripts');

require_once ROOT.'/Autoloader.php';
Autoloader::register();

$app = new Main; // Main is the rooter
$app->start();