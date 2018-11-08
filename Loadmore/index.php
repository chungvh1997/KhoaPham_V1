<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    
    include_once "IndexModel.php";
  
            $model = new IndexModel;
            $product= $model->loadProductIndex();
            // print_r($product);
            // die;
            foreach($product as $p){
                echo $p->id;
            }
            
    ?>
    <!-- loadmore -->
        <div class="product-sec1">
        <div class="col-md-12 ">
                                <div class="show_more_main" id="show_more_main<?=$p->id?>">
                <span id="<?=$p->id?>" class="show_more" title="Load more posts">Show more</span>
                <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
            </div>
        </div>
    </div>
		<!-- endloadmore -->
			<script >
		$(document).ready(function(){
			$(document).on('click','.show_more',function(){
				var ID = $(this).attr('id');
				$('.show_more').hide();
				$('.loding').show();
				$.ajax({
					type:'POST',
					url:'ajax_more.php',
					data:'id='+ID,
					success:function(html){
						$('#show_more_main'+ID).remove();
						$('.product-sec1').append(html);
					}
				});
			});
		});
		</script>
</body>
</html>