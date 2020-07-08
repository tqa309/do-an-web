<?php $path= $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/common/functions.php";

$firstName=isset($_POST['firstName']) ? $conn->real_escape_string($_POST['firstName']) : "";
$lastName=isset($_POST['lastName']) ? $conn->real_escape_string($_POST['lastName']) : "";
$userName=isset($_POST['userName']) ? $conn->real_escape_string($_POST['userName']) : "";
$email=isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : "";
$address=isset($_POST['address']) ? $conn->real_escape_string($_POST['address']) : "";
$password=isset($_POST['password']) ? $conn->real_escape_string($_POST['password']) : "";
$error=[];

$hashPassword=password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);

$sql="INSERT into user (username,password,email,first_name,last_name,address,register_date) values ('$userName','$hashPassword','$email','$firstName','$lastName','$address','".date('Y-m-d h:i:s')."')";
if($conn->query($sql)==true){
    $error[]=array(
        "error"=>false,
        "message"=>"Tạo tài khoản thành công"
    );
}else{
    $error[]=array(
        "error"=>true,
        "message"=>"Tạo tài khoản thất bại ".$conn->error()
    );
}
echo json_encode($error);