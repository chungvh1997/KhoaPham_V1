<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
</head>
<?php
require "arrSanpham.php";
// include_once "arrSP.php";
// print_r($arrSP);
?>
<body>
    <div class="content">
<a href="cart.php">cart</a>
        <?php 
        foreach($arrSP as $sp):
        ?>
            <div class="item">
                <div class="image">
                    <img src="<?php echo $sp['image']?>">
                </div>
                <div class="info">
                    <div class="name"><?=$sp['name']?></div>
                    <p>Nhắn tin 5.000đ xác nhận mua hàng</p>
                    <p class="promotion">Khuyến mãi</p> 
                    <p>Nhận sản phẩm trong 48h</p> 
                    <p>Không áp dụng chuyển hàng</p>
                </div>
                <div class="name"><?=$sp['name']?></div>
                <div class="price"><?=number_format($sp['price'],2,',','.')?> vnd</div>
                <button><a href="http://localhost/KhoaphamTL/KhoaPham_V1/PHP/Cart/xulimuahang.php?id=<?=$sp['id']?>">Mua Hang</a></button>

            </div>
        <?php

        endforeach
        ?>
        



    </div>
</body>
</html>