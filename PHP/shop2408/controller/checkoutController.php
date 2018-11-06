<?php  
include 'basecontroller.php';
class checkoutController extends baseController{
    function getCheckoutPage(){
        return $this->loadView('checkout');
    }
}
?>