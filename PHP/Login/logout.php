<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	echo 'Dang xuat thanh cong';
	session_destroy();
	
	setcookie("user", "", time()-3600);
	setcookie("pass", "", time()-3600);

	 ?>	
</body>
</html>