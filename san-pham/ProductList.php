<?php 
require_once 'DBController.php';
$db = new DBController();
$conn = $db->connect();

$key=$_POST['key'];
$page=$_POST['page'];
$start= intval($page) * 12;

$orderby = '';
if (!isset($_POST['orderby'])) {
    $orderby = "order by `item_price`";
} else {
    if (strval($_POST['orderby']) == 'price-desc') {
        $orderby = "order by `item_price` desc";
    } else {
        if (strval($_POST['orderby']) == 'date') {
            $orderby = "order by `item_register` desc";
        } else {
            $orderby = "order by `item_price`";
        }
    }
}

$sql="SELECT * FROM product ";
// $result='';
// if($key == ""){
//     $result = $conn->query('SELECT * FROM product');
// }
// else{
//     $result = $conn->query('SELECT * FROM `product` WHERE `item_name` like "'.$key.'" or `item_brand` like "'.$key.'"');
// }

$sql .="WHERE `item_name` like '%".$key."%' or `item_brand` like '%".$key."%' " . $orderby;


$sql.=" LIMIT $start, 12";
$result = $conn->query($sql);
$KQ=array();
while ($rows = $result->fetch_assoc()) {
    $KQ[] = array(
        "ID" => $rows['item_id'] ,
        "Name" => $rows['item_name'], 
        "Price"=>$rows['item_price'],
        "img"=>$rows['item_image'],
        "Brand"=>$rows['item_brand']
    );
}
echo json_encode($KQ);
$conn->close();
