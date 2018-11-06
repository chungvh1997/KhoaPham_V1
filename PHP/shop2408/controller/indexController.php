<?php
include_once 'basecontroller.php';
include_once 'model/indexModel.php';
class indexController extends baseController{
    function getHomePage(){
        $model = new IndexModel;
        $slide = $model->selectSlide();
        $specialProduct= $model->selectSpecialProducts();
        $bestSeller = $model->bestSeller();
        $data=[
            'slide'=>$slide,
            'specialProduct'=>$specialProduct ,
            'bestSeller'=>$bestSeller   
        ];
        // print_r($bestSeller);
        // die;
   
        return $this->loadView('index',"Trang Chủ",$data);
    }
}
?>