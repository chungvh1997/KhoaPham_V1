<?php
$controllerName  = $_GET['controller'];
$actionName  = $_GET['action'];
require_once 'controller/index.php';
$controller = new Index();
$controller->index();
?>