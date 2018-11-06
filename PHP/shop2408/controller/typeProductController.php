<?php  
include 'basecontroller.php';
include_once "model/typeProductModel.php";
class typeProductController extends baseController{
    function gettypeProductPage(){
        $urlType = $_GET['url'];
        $model = new TypeProductModel;
        //c2
    //    $type = $model->selectCategorieByUrl($urlType);
    //c1
       
        if(isset($_GET['page']) && $_GET['page'] > 0 && is_numeric($_GET['page'])){
           $page= (int) $_GET['page'];
        }else{
            $page = 1;
        }
        $itemPerPage =3;
        $position = ($page-1)*$itemPerPage;
        
    $type  = $model->selectCategories($urlType);
    $product  = $model->selectproductbyCategories($urlType,$position,$itemPerPage);
    
  
        if(!$type){
            Header('Location:404.html');
            return;
        }
        $data=[ 
            "product"=>$product,
            "type"=>$type
        ];
        //   print_r($product); die;
        return $this->loadView('type-product',$type->name,$data);
    }
}
?>