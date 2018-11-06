<?php  
require_once 'controller/detailProductController.php';
$c = new detailProductController;
return $c->getDetailPage();

?>