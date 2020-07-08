<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";

$email=isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : "";
$error=[];
$sql="SELECT * from user where email='$email'";

$result=$conn->con->query($sql);

if($result->num_rows>0){
    $error[]=array(
        "error"=>true,
        "message"=>"Email đã được sử dụng vui lòng đổi email khác"
    );
}else{
    $error[]=array(
        "error"=>false,
        "message"=>"Email chấp nhận"
    );
}
echo json_encode($error);
