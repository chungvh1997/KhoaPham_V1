<?php 
include_once "controllers/holdController.php";
$load= new holdController();
return $load->getHoldpage();
?>