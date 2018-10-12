<?php 
session_start();
$arr ="dd";
$idSP=isset($_GET["id"])?$_GET["id"]:false;
if ($idSP){
     if (!isset($_SESSION['myArray'])){
          $_SESSION['myArray'] = array();
        }
    $_SESSION['myArray'][] = $idSP;
    $result = array_unique($_SESSION['myArray']);

header('Location:http://localhost/KhoaphamTL/KhoaPham_V1/PHP/Cart/home.php');
}
?>