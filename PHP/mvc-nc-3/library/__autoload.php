<?php
$controller = $_GET['controller'];
function __autoload($file_name){
	include_once('models/'.$GLOBALS['controller'].'/'.$file_name.'.php');
}
?>