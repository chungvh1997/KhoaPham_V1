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
<body>
    <div class="content">
    	<?php include 'mang.php';
        foreach ($arr as $key=>$value):
       ?>
       <div class="item">
        <div class="image">
           <img src="<?=$value["image"]?>">
       </div>
       <div class="info">
           <div class="name"><?=$value["name"];?></div>
           <p class="promotion"><?=$value["promotion"];?></p>
       </div>
       <div class="price"><?=$value["price"];?></div>
   </div>
   <?php endforeach ?>
</div>
</body>
</html>