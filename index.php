<?php


// set error message in project
//ini_set('display_errors', 1);
//error_reporting(E_ALL);



define('ROOT', dirname(__FILE__));
require_once(ROOT . '/db.php');
require_once(ROOT . '/route/Route.php');

$router = new Route();

$router->run();


?>
