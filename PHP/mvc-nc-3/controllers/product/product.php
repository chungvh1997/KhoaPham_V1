<?php
if(isset($_GET['act'])){
	
	switch($_GET['act']){
		
		case 'listed': include_once('controllers/product/listed.php');
		break;
	}
}
?>