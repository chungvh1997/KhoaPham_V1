<?php
	include_once("arrSP.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="bt3.css">
	</head>
	<body>
		<div class="content">
			<?php 
				$count = count($arrSP);
				for ($i=0; $i < $count; $i++) { 
			 ?>
	        <div class="item">
	            <div class="image">
	                <img src="<?php echo $arrSP[$i]["image"]  ?>">
	            </div>
	            <div class="info">
	                <div class="name"><?php echo $arrSP[$i]["name"]; ?></div>
	                <p>Nhắn tin 5.000đ xác nhận mua hàng</p>
	                <p class="promotion">Khuyến mãi</p> 
	                <p>Nhận sản phẩm trong 48h</p> 
	                <p>Không áp dụng chuyển hàng</p>
	            </div>
	            <div class="name"><?php echo $arrSP[$i]["name"]; ?></div>
	            <div class="price"><?php echo $arrSP[$i]["price"]; ?></div>
	        </div>
	        <?php } ?>
    	</div>
	</body>
</html>