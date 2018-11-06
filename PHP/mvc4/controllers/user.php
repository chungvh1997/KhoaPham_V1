<?php
switch($_GET['act']){
	case 'add': include_once('add_user.php');
	break;
	case 'edit': include_once('edit_user.php');
	break;
	case 'del': include_once('del_user.php');
	break;
	case 'list': include_once('list_user.php');
	break;
}
?>