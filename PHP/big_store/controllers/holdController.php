<?php
include_once "controllers/baseController.php"; 
class holdController{
    function getHoldpage(){
     $getPage = new baseController;   
     $getPage ->loadLayoutView('hold');
    }
 }
 

?>