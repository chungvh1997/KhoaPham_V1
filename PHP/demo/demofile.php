<?php
include "book.php"; 
class SV{
	public $name;
	public $age;
	function __construct(){
		$this->name = "dog";
			$this->age = 4;

	}
	public function getBookList()
	{
		// Dưới đây mình gắn cứng 1 array để mô phỏng dữ liệu trong database
		return array(
			"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
			"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
		);
	}

}
$sv = new SV();

echo "<pre>";
	print_r($sv->getBookList());
echo "<pre>";
$arrSV = $sv->getBookList();
echo $arrSV["Jungle Book"]["title"];

 ?>