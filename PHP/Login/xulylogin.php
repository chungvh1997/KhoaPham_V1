<?php 
session_start();
$user = isset($_POST["user"])?$_POST["user"]:false;
$pass = isset($_POST["pass"])?$_POST["pass"]:false;

$remember = isset($_POST["check1"])?$_POST["check1"]:false;
$ps= "111";
$hash = md5($ps);
if(
	($user=="admin")&&(md5($pass)==$hash)
){	
	$_SESSION["user"] = $user;
	$_SESSION["pass"] = $pass;
	if($remember){
		setcookie("user", $user, time() + (86400 * 30));
		setcookie("pass", $pass, time() + (86400 * 30));
	}
	header('Location:/KhoaphamTL/KhoaPham_V1/PHP/Login/login.php');
	
}else{
	header('Location:/KhoaphamTL/KhoaPham_V1/PHP/Login/login.php');
	
}



/*
if(){
	echo 'da check';
}else{
	echo "chua";
}

$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
if(isset($_SESSION["user"])
	&&isset($_SESSION["pass"])
	&&$_SESSION["user"]=="admin"
	&&$_SESSION["pass"]=="111"  


){
	header('Location:/KhoaphamTL/KhoaPham_V1/PHP/Login/login.php');
	echo 'login thanh cong';
}else{
	header('Location:/KhoaphamTL/KhoaPham_V1/PHP/Login/login.php');
	echo 'fail';
}*/

?>