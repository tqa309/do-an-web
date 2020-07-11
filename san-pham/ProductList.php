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

$userId = '-1';
session_start();
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
}
$i = 0;
while ($row = $result->fetch_assoc()) {
    $i++;
    $price = number_format($row['item_price']);
    echo <<<EOF
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="item py-2" style="margin: auto; max-width: 250px;margin-bottom:20px;margin-top:0px; ">
        <div class="product font-rale ">
            <a href="../chi-tiet-san-pham/?id=$row[item_id]"><img class="img-fluid " style="transform: scale(1);" onmouseover="this.style='transform:scale(1.15,1.15)'" onmouseout="this.style='transform:scale(1,1)'" alt="$row[item_name]" src="../$row[item_image]"></a>
            <div class="text-center ">
            <h6 style="margin-top: 25px;">$row[item_name]</h6>
            <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2 "><span style="font-size:20px;color:red;">$price đ</span></div>
            <button type="submit" name="top_sale_submit" onclick="addToCart($userId, $row[item_id], 1)"class="btn btn-warning font-size-12">Thêm vào giỏ</button>
            </div>
        </div>
        </div>
    </div>
    EOF;
}
if ($i == 0) {
    echo '<span style = "margin: auto; font-size: 1.8em">Không có Sản phẩm phù hợp</span>';
}

$conn->close();
