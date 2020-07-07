<?php require 'functions.php';

$name=$_POST['name'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$decription=isset($_POST['decription']) ?  $_POST['decription'] : "";
$image_name=$_FILES['file']['name'];
$image=$_FILES['file']['tmp_name'];
$error=[];
function checkExistProduct($name,$product_shuffle){
	foreach ($product_shuffle as $item) {
	if($name==$item['item_name']) {	
			
		return false;
	}
	}
	return true;
}
$upload_directory ="../../assets/products/".$image_name;
move_uploaded_file($image, $upload_directory);
if(checkExistProduct($name,$product_shuffle)==true){
	$sql ="INSERT into product(item_brand,item_name,item_price,item_decription,item_image) values('$brand','$name','$price','$decription','$upload_directory')";
	$conn->query($sql);
$error[]=array(
		"error"=>false,
		"message"=>"Thêm sản phẩm thành công"
	);
}else{
	$error[]=array(
		"error"=>true,
		"message"=>"Sản phẩm đã tồn tại"
	);
}
echo json_encode($error);