<?php require './functions.php';
$idProduct=$_POST['idProduct'];
$name=$_POST['name'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$decription=isset($_POST['decription']) ?  $_POST['decription'] : "";
$image_name=$_FILES['file']['name'];
$image=$_FILES['file']['tmp_name']?$_FILES['file']['tmp_name']:"";
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
	$sql ="UPDATE product SET item_name='$name',item_brand='$brand',item_price='$price',item_decription='$decription',item_image='$upload_directory' where item_id='$idProduct'";
	$conn->query($sql);
$error[]=array(
		"error"=>false,
		"message"=>"Cập nhật sản phẩm thành công"
	);
}else{
	$error[]=array(
		"error"=>true,
		"message"=>"Cập nhật Sản phẩm tất bại"
	);
}
echo json_encode($error);