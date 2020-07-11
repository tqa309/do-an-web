<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";

$idProduct = $conn->real_escape_string($_POST['idProduct']);
$error = [];

$sql = "INSERT into item_type_detail (item_id,id_type) Values ('$idProduct','T1')";

if ($conn->query($sql) == true) {
    $error[] = array(
        "error" => false,
        "message" => "Đã thêm sản phẩm có mã $idProduct  vào danh mục Khuyến mãi hot"
    );
} else {
    $error[] = array(
        "error" => true,
        "message" => "Không thể thêm sản phẩm vào danh mục Khuyến mãi hot: Lỗi ".$conn->error()
    );
}
echo json_encode($error);