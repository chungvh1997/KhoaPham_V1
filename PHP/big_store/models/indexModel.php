<?php 
include_once "DBconnect.php";
class indexModel extends DBconnect {
    function getProducts(){
    $sql ="select * from products limit 1,4 ";
    return $this->selectMorerow($sql);
    }

}

?>