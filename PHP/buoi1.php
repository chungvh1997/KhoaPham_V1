<?php
// $arr=["key"=>"1",1,2,3,4];
// echo " <pre>";
// print_r($arr);

// echo "</pre>";
// echo $arr["key"];
// foreach ($arr as $conc => $ccc) {
// 	echo $arr[0];
	
// }
$arr1=[1,3,5,7,9];

$arr2 =[
	"name1"=>"php",
	"name2"=>"php1",
	"name3"=>"php2",
	"mang" =>$arr1,
];
$arr3=[4,6,$arr2];
echo " <pre>";
print_r($arr3);
echo "</pre>";

echo $arr3[2]["mang"][4];

?>