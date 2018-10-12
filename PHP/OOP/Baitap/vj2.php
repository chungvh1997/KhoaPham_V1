<?php 
//sap xep mang so nguyen
class sapxepArr{
	private $mang;
	function __construct($arr){
		$this->mang = $arr;

	}
	function hamXuli(){
		
		$sto =  $this->mang;
		sort($sto);  
		return $sto;

	}
}
$Arr = [4,1,5,2,8,1,6];
$sapxep = new sapxepArr($Arr);
print_r($sapxep->hamXuli());

 ?>
