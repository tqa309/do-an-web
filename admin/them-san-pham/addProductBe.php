<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";;

$name=isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : "";
$brand=isset($_POST['brand']) ? $conn->real_escape_string($_POST['brand']) : "";
$price=isset($_POST['price']) ? $conn->real_escape_string($_POST['price']) : "";
$decription=isset($_POST['decription']) ? $conn->real_escape_string($_POST['decription']) : "";
$image=$_FILES['file']['tmp_name'];
$error=[];
$newImageName = uniqid('uploaded_', true) 
    . '.' . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
$upload_directory ="../../assets/products/".$newImageName;
$acces="assets/products/".$newImageName;
move_uploaded_file($image, $upload_directory);
	$sql ="INSERT into product(item_brand,item_name,item_price,item_decription,item_image,item_register) values('$brand','$name','$price','$decription','$acces','".date("Y-m-d h:m:s")."')";
		if($conn->query($sql)==true){
$error[]=array(
		"error"=>false,
		"message"=>"Thêm sản phẩm thành công"
	);
}else{
	$error[]=array(
		"error"=>true,
		"message"=>"Thêm sản phẩm thất bại: ".$conn->error()
	);
}
echo json_encode($error);