<?php  
include 'basecontroller.php';
class shopingCartController extends baseController{
    function getshoppingcartPage(){
        return $this->loadView('shopping-cart');
    }
}
?>