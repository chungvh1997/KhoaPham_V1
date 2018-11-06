<?php 
include_once "controllers/indexController.php";
$load= new indexController();
return $load->getIndexpage();;
?>