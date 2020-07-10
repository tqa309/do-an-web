<?php require_once '../san-pham/DBController.php';

$db = new DBController();
$conn = $db->connect();

$id=$_POST['id'];
// $key="";
$sql="SELECT * FROM product WHERE `item_id` like '".$id."'";
$result = $conn->query($sql);
$KQ=array();
while ($rows = $result->fetch_assoc()) {
    $KQ = array(
        "ID" => $rows['item_id'] ,
        "Name" => $rows['item_name'], 
        "Price"=>$rows['item_price'],
        "img"=>$rows['item_image'],
        "Brand"=>$rows['item_brand'],
        "Des"=>$rows['item_decription']
    );
}
echo json_encode($KQ);
$conn->close();