<?php 
//là đại diện cho lớp cha  và thường được sử dụng gọi đến biến số có khóa static hay phương thức nào đó  trong lớp cha của lớp hiện tại
require "parent.php";
class lion extends cat{
//override height
	private $__height=30;
	public $__name="meocon";
	
//sử dụng parent
	public function getInfo1(){
		parent::getInfo();
		echo $this->__height."</br>";
	}
//sử dụng parent gọi biến age lưu ý biến age phải là static
public function getInfo(){
		
		echo parent::$__age."</br>";
		//gọi fuction tu lop cha không cần static
		parent::getName();
		//gọi fuction tu lop cha co static
		parent::getAge();

	}
}
//tóm lại : parent gọi biến thì biến ở lớp cha phải có static
// parent gọi function thì có static hay không đều gọi được
//nên gọi parent để phân biệt lớp con hay lớp cha

$lionA = new lion();

// $lionA->getInfo1();
$lionA->getInfo();


?>