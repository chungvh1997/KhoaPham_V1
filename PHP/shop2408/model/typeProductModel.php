<?php
include "DBconnect.php";
class TypeProductModel extends DBConnect{
    //2 cach selectCategories 1 gộp 1 không gộp
    //c1
    function selectCategories($url){
        $sql = " SELECT c.*, p.url
                 from categories as c
                INNER JOIN page_url as p
                on c.id_url = p.id
                
            ";
            if($url!= null){
                $sql .= " where url ='$url'";
                return $this->loadOneRow($sql);
            }
        return $this->loadMoreRow($sql);
    }
    
    //c2
    // function selectCategorieByUrl($url){
    //     $sql = " SELECT c.*, p.url
    //              from categories as c
    //             INNER JOIN page_url as p
    //             on c.id_url = p.id
    //             where url ='$url'
                
    //         ";
    //     return $this->loadOneRow($sql);
    // }
    //selectproductbyCategories
       function selectproductbyCategories($url,$position=0,$qty=3){
        $sql = " SELECT p.*, pa.url
                        from products as p
                        INNER JOIN page_url as pa
                           on p.id_url = pa.id
                        where id_type =
                        (
                            SELECT c.id from categories as c INNER JOIN page_url as p on c.id_url = p.id where url ='$url'
                        )  
                        limit $position,$qty   
            ";
        return $this->loadMoreRow($sql);
    }
    

}


?>