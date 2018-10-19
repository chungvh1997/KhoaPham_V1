<?php
try { 
    $sttm = new PDO('mysql:host=localhost;dbname=db_kp', "root", ""); 
    $sttm->exec("set names utf8");     
    echo "tc";
} 
catch (PDOException $e) { 
    print "Error!: " . $e->getMessage() . "<br/>";   
    die(); 
} 
/*cách 1  */
// $sql = "delete from slide where id =6";
// $result = $dbh ->exec($sql);

// if($result && $result >0){
//     echo "them thanh cong";
// }else {
//     echo "thath bai";
//var_dump($result); //false | int(0)
// }
/*end cách 1  */

/* cách 1.1 */
// $data = [
//     'hinh-2.png',
//     'http://.....',
//     'Khuyen mai...'
// ];
// $sql = "INSERT INTO slide(image,link,title) 
//         VALUES(?,?,?)";

/* end cách 1.1 */

/* cách 1.2*/
// $data = [
//     ':image'=>'hinh-2.png',
//     ':link'=>'http://.....',
//     ':title'=>'Khuyen mai...'
// ];
// $sql = "INSERT INTO slide(image,link,title) 
// VALUES(:image,:link,:title)";
// $sttm = $db->prepare($sql);
// $check = $sttm->execute($data);
// if($check){
//     echo "thanh cong";
// }
// else{
//     echo 'that bai';
// }
// 
/* end cách 1.2  */



/*cách 2 :bindParam và cách 3 :bindValue */
$image="img.png";
$link="google.com";
$title="bao cong an";
$sql = "insert into slide (image,link,title) values (?,?,?)";
$sttm = $db->prepare($sql);
$sttm->bindParam(1,$image);
$sttm->bindParam(2,$link);
$sttm->bindParam(3,$title);
//bindParam : chỉ cho phép truyền biến
//bindValue :có thể truyền giá trị VD:$sttm->bindParam(1,img.png);
$result = $sttm->execute($sql);
if($result){
    echo "them thanh cong";
}else {
    echo "thath bai";
}
/*end Cách 2 */


/*cách 3 không dùng ???:bindParam và cách 3 :bindValue */
$image="img.png";
$link="google.com";
$title="bao cong an";
$sql = "insert into slide (image,link,title) values (:image,:link,:title)";
$sttm = $db->prepare($sql);
$sttm->bindParam(':image',$image);
$sttm->bindParam(':link',$link);
$sttm->bindParam(':title',$title);
//bindParam : chỉ cho phép truyền biến
//bindValue :có thể truyền giá trị VD:$sttm->bindParam(1,img.png);
$result = $sttm->execute($sql);
if($result){
    echo "them thanh cong";
}else {
    echo "thath bai";
}
/*end Cách 3 */


?>