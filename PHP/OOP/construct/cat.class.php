<?php 
class cat{
	private $__name;
	private $__color;
	private $__age;
//set & get
		/*	public function setInfo($name,$color,$age){
				$this->__name=$name;
				$this->__color=$color;
				$this->__age=$age;
			}
			public function getInfo(){
				return $this->__age;
			}*/
 //construct
			//1
			/*function __construct(){
				$this->__name="kitty";
				$this->__color="yellow";
				$this->__age=11;
			}
			//2
			function __construct($name,$color,$age){
				$this->__name=$name;
				$this->__color=$color;
				$this->__age=$age;
			}
			//2.2
			function __construct($name="doremon",$color="black",$age="22"){
				$this->__name=$name;
				$this->__color=$color;
				$this->__age=$age;
			}
			public function getInfo(){
				return $this->__name;
			}*/

		//3 dùng mảng tránh dài quá
			function __construct($arr){
				$this->__name=$arr['name'];
				$this->__color=$arr['color'];
				$this->__age=$arr['age'];
			}




}

 ?>