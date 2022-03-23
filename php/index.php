<?php session_start();
$_SESSION['prenom'] = 'Pierre';?>

<?php

//lance le routeur 
require_once('controllers/Router.php');

$router = new Router();
$router->routeReq();

?>