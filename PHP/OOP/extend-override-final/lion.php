<?php 
require "cat.php";
class lion extends cat{
//override height
	private $height=30;

	public function getHeight(){
		return $this->height;
	}

	public function getInfo(){
		echo $this->getAge()."</br>";
		echo $this->getColor()."</br>";
		echo $this->getName()."</br>";
		echo $this->getHeight()."</br>";
	}

}

$lionA = new lion();
$lionA->setInfo("meo","yellow",1,30);
$lionA->getInfo();


?>