<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
include_once('library/__autoload.php');
if(isset($_GET['controller'])){
	switch($_GET['controller']){
		
		case 'user': include_once('controllers/user/user.php');
		break;
		case 'product': include_once('controllers/product/product.php');
		break;
	}
}
else{
	header('location: index.php?controller=user&act=login');
}
?>















</body>
</html>