<?php 
require "sinhvien.php"; 
?>


<?php
if(isset($_POST["sv1"])){
	$sv1 = new SinhVien();
	$sv1->setName($_POST["sv1"]);
	echo "Ho ten cua ban la :" .$sv1->getName();
	
}
?> 

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="xuly.php" method="POST" accept-charset="utf-8">
	<input type="text" name="sv1" value="<?php if (isset($_POST['sv1'])) echo $_POST['sv1']; ?>">
        <input type="submit" value="Ket qua" />
</form>
</body>
</html>