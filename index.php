<?php


//define('DS',DIRECTORY_SEPARATOR);
define('DS',DIRECTORY_SEPARATOR);


include_once "bootstrap".DS."constants.php";
include_once ABSPATH.DS."autoload.php";


\App\Services\Router\Router::dispatch();
new \App\Controllers\HomeController();