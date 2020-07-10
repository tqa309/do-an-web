<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";
$idProduct = $conn->real_escape_string($_POST['idProduct']);
$error = [];

$sql = "DELETE from item_type_detail Where item_id='$idProduct' and id_type='T1'";

if ($conn->query($sql) == true) {
    $error[] = array(
        "error" => false,
        "message" => "Đã xóa sản phẩm có mã $idProduct  khỏi danh mục Khuyến mãi hot "
    );
} else {
    $error[] = array(
        "error" => true,
        "message" => "Không thể xóa sản phẩm khỏi danh mục Khuyến mãi hot: Lỗi ".$conn->error()
    );
}
echo json_encode($error);