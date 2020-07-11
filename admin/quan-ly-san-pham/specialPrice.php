<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";

$idProduct = $conn->real_escape_string($_POST['idProduct']);
$error = [];

$sql = "INSERT into item_type_detail (item_id,id_type) Values ('$idProduct','T2')";

if ($conn->query($sql) == true) {
    $error[] = array(
        "error" => false,
        "message" => "Đã thêm sản phẩm có mã $idProduct  vào danh mục Sản phẩm nổi bật"
    );
} else {
    $error[] = array(
        "error" => true,
        "message" => "Không thể thêm sản phẩm vào danh mục Sản phẩm nổi bật: Lỗi ".$conn->error()
    );
}
echo json_encode($error);