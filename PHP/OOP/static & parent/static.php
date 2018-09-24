<?php 
class demo{
	static $meo="dog";
	static $chuot="chuot chu";
	//sử dụng self giống như this cho static
	static function info(){
		echo demo::$meo."</br>";
		echo self::$chuot;

	}
}

// static dùng cho phương thức or biến
 // truy cập nhanh không cần khởi tạo
//nếu có static thì pải dùng tên class :: biến or phương thức


// echo demo::$meo;
demo::info();

 ?>