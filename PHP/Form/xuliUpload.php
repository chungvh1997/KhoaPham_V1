<?php 
	


$image = $_FILES["fileToUpload"];
$uploadOk = 1;
$des ="avatar/".$image["name"];
$target_file = "avatar/" . basename($image["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if($image["error"]>0){
	header("location:PHP/form/../../uploadfile.php");
	$uploadOk=0;
}


//kiem tra file size
if($image["size"]>100.000){
	echo "maxx";
	$uploadOk=0;
}

//file type
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
//rename

if($uploadOk==0){
	echo "Sorry, your file was not uploaded.";
}else{

	
// move_uploaded_file(filename, destination)
//filename lấy tmp_name
// des : đường dẫn + tên  $image["name"] là tên cố định
	move_uploaded_file($image["tmp_name"], $des);

}

?>