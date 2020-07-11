<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";
$idProduct = isset($_POST['idProduct']) ? $conn->real_escape_string($_POST['idProduct']) : "";;
$name=isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : "";
$brand=isset($_POST['brand']) ? $conn->real_escape_string($_POST['brand']) : "";
$price=isset($_POST['price']) ? $conn->real_escape_string($_POST['price']) : "";
$decription=isset($_POST['decription']) ? $conn->real_escape_string($_POST['decription']) : "";
$image_name = $_FILES['file']['name'];
$image = $_FILES['file']['tmp_name'] ? $_FILES['file']['tmp_name'] : "";
$error = [];
$newImageName = uniqid('uploaded_', true) 
    . '.' . strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
$upload_directory ="../../assets/products/".$newImageName;
move_uploaded_file($image, $upload_directory);
$acces="assets/products/".$newImageName;

$sql = "UPDATE product SET item_name='$name',item_brand='$brand',item_price='$price',item_decription='$decription',item_image='$acces' where item_id='$idProduct'";
if ($conn->query($sql) == true) {
	$error[] = array(
		"error" => false,
		"message" => "Cập nhật sản phẩm có mã $idProduct thành công",
		"src"=>$upload_directory
	);
} else {
	$error[] = array(
		"error" => true,
		"message" => "Cập nhật Sản phẩm tất bại ".$conn->error()
	);
}
echo json_encode($error);
