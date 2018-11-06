<!-- //truy van trang chu -->
<?php
include_once 'DBconnect.php';
class indexModel extends DBConnect{
    function selectSlide(){
        $sql = "SELECT * from slide WHERE status =1";
        return $this->loadMoreRow($sql);
    }

    function selectSpecialProducts(){
        $sql = "SELECT p.*, u.url
                FROM products p 
                INNER JOIN page_url u
                ON p.id_url = u.id
                WHERE p.status=1";
        return $this->loadMoreRow($sql);
      

    }
    function bestSeller(){
            $sql = "SELECT p.*,u.url ,sum(d.quantity) as tongmua
            FROM products p 
            INNER JOIN bill_detail d ON p.id = d.id_product
            INNER JOIN page_url u ON p.id_url = u.id
            group by d.id_product
            order by tongmua DESC
            limit 0,10";
        return $this->loadMoreRow($sql);
      

    }
}

?>