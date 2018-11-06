<?php
class User{
    var $name;
    function __construct($ten){
        $this->name = $ten;
        echo __METHOD__. ' duoc goi';
        echo " --- ";
        echo $this->name;
    }
    function __destruct(){
        unset($this->name);
        echo '<br>';
        echo __METHOD__. ' duoc goi';
        echo '<br>';
        echo __FUNCTION__. ' duoc goi';
        echo '<br>';
        echo __CLASS__ .' da bi huy';
    }
}
$userA = new User("a");

echo "<h1>vu huty huc</h1>";
echo "<h1>vu huty huc</h1>";
echo "<h1>vu huty huc</h1>";
?>