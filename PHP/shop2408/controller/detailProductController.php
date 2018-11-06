<?php  
include 'baseController.php';
include 'model/detailModel.php';
class detailProductController extends baseController{
    function getDetailPage(){
        $url = $_GET['url'];
        $id = $_GET['id'];
        $model = new detailModel;
        $p = $model->selectProductById($id,$url);

        $idType =(int)$p->id_type;
        $idProduct =(int)$p->id;
        $relatedProducts=$model->selectRelatedProduct($idType,$idProduct);
        if(!$p){
            // return $this->loadView('404','404 Not Found!');
            header("Location:404.html");
        }
        $title =$p->name;
        $data=[
            
            "detail"=>$p,
            'relatedProducts'=>$relatedProducts
        ];
        // print_r($relatedProducts);
        // die;
        return $this->loadView('detail-product',$title, $data);
    }

}
?>