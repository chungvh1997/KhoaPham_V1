<?php
if(isset($_GET['act'])){
	
	switch($_GET['act']){
		
		case 'login': include_once('controllers/user/login.php');
		break;
		case 'add': include_once('controllers/user/add.php');
		break;
		case 'edit': include_once('controllers/user/edit.php');
		break;
		case 'del': include_once('controllers/user/del.php');
		break;
		case 'listed': include_once('controllers/user/listed.php');
		break;
		
	}
}
?>