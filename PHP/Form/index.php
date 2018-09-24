<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$user = isset($_POST["user"])?$_POST["user"]:false;
	$pass = isset($_POST["password"])?$_POST["password"]:false;
	if(($user=="admin")&&($pass=='111111')){
	echo "thanh cmn cong" ;
}else{
?>
<form  method="POST">
	User: <input type="text" name="user" value="<?=$user?>" >

	Password: <input type="password" name="password">
	<input type="submit" value="Submit">
</form>
<?php } ?>
</body>
</html>