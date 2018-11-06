<?php
include_once "model/typeProductModel.php";
class baseController{
    private $domain = null;
    function __construct(){
        $this->domain = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']; //http://localhost
    }
   
    function loadView(string $view='index', string $title='Home', array $data = []){
        //lamviec typeProduct categories
     
        $model = new TypeProductModel;
        $categories = $model->selectCategories("");


    //    print_r($categories); die;
        include_once "view/layout.view.php";
    }
}

?>