<?php session_start();?>

<?php

//lance le routeur 
require_once('controllers/Router.php');

$router = new Router();
$router->routeReq();

?>