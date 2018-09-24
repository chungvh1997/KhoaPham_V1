<?php 
class cat{
	private $__name;
	private $__color;
	private $__age;


			public function setInfo($name,$color,$age){
				$this->__name=$name;
				$this->__color=$color;
				$this->__age=$age;
			}
			public function getName(){
				return $this->__name;
			}
			public function getColor(){
				return $this->__color;
			}
			public function getAge(){
				return $this->__age;
			}
			// vidu cho final trước bên lion.php getInfo sẽ ko override dc
			 public function getInfo(){
				echo $this->__age."</br>";
				echo $this->__color."</br>";
				echo $this->__name."</br>";
			}
 

 //final
//đối vs method : lớp con không thể override các phương thức ở lớp cha nếu các phương thức ở lớp cha chứa final
//đối vs class: ko thể kế thừa nếu có finals


}

 ?>