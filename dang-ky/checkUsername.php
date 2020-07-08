<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";

$userName=isset($_POST['userName']) ? $conn->real_escape_string($_POST['userName']) : "";
$error=[];
$sql="SELECT * from user where username='$userName'";

$result=$conn->con->query($sql);

if($result->num_rows>0){
    $error[]=array(
        "error"=>true,
        "message"=>"Username đã được sử dụng vui lòng đổi Username khác"
    );
}else{
    $error[]=array(
        "error"=>false,
        "message"=>"Username chấp nhận"
    );
}
echo json_encode($error);