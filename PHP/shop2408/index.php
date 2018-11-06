<?php 
require_once 'controller/indexController.php';
$c = new indexController;
return $c->getHomePage();
?>