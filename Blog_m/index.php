<?php

define('ROOT', dirname(__FILE__));
require_once ROOT.'/components/Router.php';
echo ROOT;

$router = new Router;
$router->run();

