<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery/jquery-3.3.1.min.js"></script>	
</head>
<body>
	<button>ADD</button>
</body>
<script>
/*	$(document).ready(function(){
		$("button").click(function(){
			$.get("cart.php",{sp:1}, function(status){
				
			});
		});
	});
	*/
		
		/*	$(document).ready(function(){
		$("button").click(function(){
			$.post("cart.php",{
				sp:1,
				ten:"thuc",

			}, function(response){
				tet = JSON.parse(response);
				console.log(tet.sp);
			});
		});
	});*/

		          /*      $.ajax({
                    url : "cart.php", // gửi ajax đến file result.php
                    type : "post", // chọn phương thức gửi là get
                    dataType:"json", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                       	sp:1,
						ten:"thuc",
                    },
                    success : function (result){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        // $('#result').html(result);

                        tet = JSON.parse(result);
                        console.log(tet.sp);
                    },
                    error:function(err){
                    	console.log(err);
                    }
                });
*/

      $.ajax({
                    url : "cart.php", // gửi ajax đến file result.php
                    type : "get", // chọn phương thức gửi là get
                    dataType:"json", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                       	sp:1,
						ten:"thuc",
                    },
                    success : function (result){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        // $('#result').html(result);

                       
                        console.log(typeof(result));
                    },
                    error:function(err){
                    	console.log(err);
                    }
                });


</script>
</html>