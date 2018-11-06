<?php  
include_once 'controllers/baseController.php';
include_once 'models/indexModel.php';
class indexController{
   function getIndexpage(){
    $getPage = new baseController; 
    $p = new indexModel;
    $result= $p->getProducts();
    $data = [
        'product' => $result,
    ];
    // print_r($data);
    // die;
    $getPage ->loadLayoutView('index',$data);
   }
}

?>