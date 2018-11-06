<?php
$Product = new Product();
$listed = $Product->listed();
include_once('views/product/listed_view.php');
?>