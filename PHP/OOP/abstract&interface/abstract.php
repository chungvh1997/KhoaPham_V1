<?php 

abstract class law{
	private $name ;

	 function law1(){
        echo __METHOD__;
    }

	 abstract function law2();

}

class Sublaw extends law{

	function law2($a=0){
        echo $a;
        // echo __METHOD__;
    }
}
$v = new Sublaw();
$v->law2(2);
$v-> law1();


 ?>