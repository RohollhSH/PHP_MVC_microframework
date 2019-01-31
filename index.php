<?php


//define('DS',DIRECTORY_SEPARATOR);
define('DS',DIRECTORY_SEPARATOR);


include_once "bootstrap".DS."constants.php";
include_once ABSPATH.DS."vendor".DS."autoload.php";


include_once "bootstrap".DS."init.php";

\App\Services\Router\Router::dispatch();
new \App\Controllers\HomeController();

