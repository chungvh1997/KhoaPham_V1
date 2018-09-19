<?php	
	$a = 4;
	$b = 8;
	echo "tong hai so ".$a ." va ". $b . " la " . ($a+$b);
	$arr = ["MySQL",2,3];
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	$object = json_encode($arr);
	$arr2 = json_decode($object);
	//  duyệt hết
	foreach ($arr as $key => $value) {
		echo $key ." => ". $value . "<br>";
	}
	// duyet value trong mảng
	$count = count($arr);
	for ($i=0; $i < $count  ; $i++) { 
		echo $arr[$i] . "<br>";
	}
	// duyet vị trí
	for ($i=0; $i < count($arr)  ; $i++) { 
		echo $i . "<br>";
	}


	// mang lồng

	$mang = [1,2,3,4,5];
	$mang2 = [
				"name1" => "MySQL",
				"name2" => "PHP",
				"name3" => "JOmla",
				"name4" => "HtML",
				"name5" => "CSS",
				1 => $mang
			 ];
	echo "<pre>";
	print_r($mang2);
	echo "</pre>";
	echo $mang2[1][3];
	