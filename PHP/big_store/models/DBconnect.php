<?php 
class DBconnect{
    private $conn =null;
    private $sttm =null;
    function __construct(){
        try { 
            $this->conn = new PDO('mysql:host=localhost;dbname=db_kp', "root", ""); 
            $this->conn->exec("set names utf8");     
            echo "tc";
        } 
        catch (PDOException $e) { 
            print "Error!: " . $e->getMessage() . "<br/>";   
            die(); 
        }
     
    
    }
    //select
    //insert/delete/update
    function EditQuery($sql,$data=[]){
        $sttm =  $this->conn->prepare($sql);
        $check = $sttm->execute($data);
        if($check){
            echo "thanh cong";
        }
        else{
            echo 'that bai';
        }
    }
    //selectOnerow
    function selectOnerow($sql,$data=[]){
       $check=$this->Statement($sql,$data);
        if($check){
           return $result = $this->sttm->fetch(PDO::FETCH_OBJ);
            echo "thanh cong";
           
        }
        else{
            echo 'that bai';
        }
    }
      //selectMorerow
      function selectMorerow($sql,$data=[]){
        $check=$this->Statement($sql,$data);
        if($check){
           return $this->sttm->fetchAll(PDO::FETCH_OBJ);
            echo "thanh cong";
        }
        else{
            echo 'that bai';
        }
    }
    function Statement($sql,$data){
        $this->sttm =  $this->conn->prepare($sql);
        $check = $this->sttm->execute($data);
        return $check;
    }
}


?>