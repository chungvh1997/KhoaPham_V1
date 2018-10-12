<?php 

include_once("../Model/model.php");

class Controller {
     public $model;	
 
     public function __construct()  
     {  
          $this->model = new Model();
     } 
	
     public function invoke()
     {
     	//ok
     	  print_r( $this->model->getBookList());
     /*     if (!isset($_GET['book']))
          {
               // nếu không có quyển sách nào được yêu cầu, thì hiển thị toàn bộ sách
               $books = $this->model->getBookList();
               include 'view/booklist.php';
          }
          else
          {
               // hiên thị sách được yêu cầu
               $book = $this->model->getBook($_GET['book']);
               include 'view/viewbook.php';
          }*/
     }

}
$v1 = new Controller();
$v1->invoke();

 ?>