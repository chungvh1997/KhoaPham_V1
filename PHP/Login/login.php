<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="xulylogin.php" method="post">
		<input type="text" name="user">
		<input type="password" name="pass">
		<input type="submit" value="Dang Nhap">

		<label>	<input type="checkbox" name="check1" > remember me</label>
		<button><a href="logout.php">Dang XUat</a></button>
		
		<?php 

		session_start();
		if(isset($_SESSION["user"])
			&&isset($_SESSION["pass"])
			&&$_SESSION["user"]=="admin"
			&&$_SESSION["pass"]=="111" 

		){
			echo "<h1>Login thanh cong</h1>";
	}
	?>
	
</form>
<a href="detail.php">Detail</a>
<a href="home.php">Home</a>

</body>
</html>