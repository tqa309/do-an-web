<?php require_once 'DBController.php';

$db = new DBController();
$conn = $db->connect();
$key='';
if (!isset($_POST['key'])) {
    if (isset($_GET['key'])) {
        $key = $_GET['key'];
    }
    else {
        $key = "";
    }
} else {
    $key = $_POST['key'];
}
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
echo $total_records;
$conn->close();