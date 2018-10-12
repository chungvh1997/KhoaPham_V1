<?php 
class connect{
	private $__conn;

	function _connect(){
		 if (!$this->__conn){
        // Kết nối
        $this->__conn = mysqli_connect('localhost', 'root', 'vertrigo', 'demo') or die ('Lỗi kết nối');
 
        // Xử lý truy vấn UTF8 để tránh lỗi font
        mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    }
		
	}

	

}


 ?>