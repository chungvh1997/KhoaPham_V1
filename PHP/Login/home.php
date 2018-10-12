<?php 
session_start();
if(isset($_SESSION["user"])
	&&isset($_SESSION["pass"])
	&&$_SESSION["user"]=="admin"
	&&$_SESSION["pass"]=="111"  


){
	echo "login thanh cong ";
}else{
	header('Location:/KhoaphamTL/KhoaPham_V1/PHP/Login/login.php');	
}

 ?>