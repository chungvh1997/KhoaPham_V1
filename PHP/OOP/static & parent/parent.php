<?php 
class cat{
	public $__name="meo";
	public $__color="yellow";
	static $__age=1;
	public function getName(){
		echo $this->__name."</br>";
	}
	static public function getAge(){
		echo self::$__age;
	}
	public function getInfo(){
		echo self::$__age."</br>";
		echo $this->__color."</br>";
		echo $this->__name."</br>";
	}



}

?>