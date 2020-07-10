<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";
$idProduct=$_POST['idProduct'];
$error=[];

$sql="DELETE from product where item_id='$idProduct'";
if($conn->query($sql)==true){
$error[]=array(
		"error"=>false,
		"message"=>"Xóa sản phẩm có mã $idProduct thành công"
	);
}else{
	$error[]=array(
		"error"=>true,
		"message"=>"Xóa sản phẩm Không thành công"
	);
}
echo json_encode($error);