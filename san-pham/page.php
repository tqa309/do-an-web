<?php require_once 'DBController.php';

$db = new DBController();
$conn = $db->connect();
$key=$_POST['key'];
// $key="a";
$sql='select count(item_id) as total
from product
';
if($key != ""){
    $sql .= " WHERE `item_name` like '%".$key."%' or `item_brand` like '".$key."'";
}
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];
$total_page = ceil($total_records / 12);
echo json_encode($total_page);
$conn->close();