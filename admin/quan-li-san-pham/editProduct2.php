<?php
$path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";
$idProduct = isset($_POST['idProduct']) ? $conn->real_escape_string($_POST['idProduct']) : "";;
$name=isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : "";
$brand=isset($_POST['brand']) ? $conn->real_escape_string($_POST['brand']) : "";
$price=isset($_POST['price']) ? $conn->real_escape_string($_POST['price']) : "";
$decription=isset($_POST['decription']) ? $conn->real_escape_string($_POST['decription']) : "";

$error = [];

$sql = "UPDATE product SET item_name='$name',item_brand='$brand',item_price='$price',item_decription='$decription' where item_id='$idProduct'";
if ($conn->query($sql) == true) {
	$error[] = array(
		"error" => false,
		"message" => "Cập nhật sản phẩm có mã $idProduct thành công"
	);
} else {
	$error[] = array(
		"error" => true,
		"message" => "Cập nhật Sản phẩm tất bại ".$conn->error()
	);
}
echo json_encode($error);
