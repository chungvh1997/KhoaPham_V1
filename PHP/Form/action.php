<?php 
 $user = isset($_POST["user"])?$_POST["user"]:false;
  $pass = isset($_POST["password"])?$_POST["password"]:false;
 if(($user=="admin")&&($pass=='111111')){
 	echo "thanh cmn cong" ;
 }else{
 	header("location:../../PHP/form/index.php");
 }

?>