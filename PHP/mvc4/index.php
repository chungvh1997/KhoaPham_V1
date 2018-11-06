<?php
include_once('library/connect.php');
switch($_GET['controller']){
	case 'user': include_once('controllers/user.php');
	break;
	case 'product': include_once('controllers/product.php');
	break;
}
?>