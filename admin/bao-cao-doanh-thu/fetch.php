<?php
include'database.php';
 $bill_start_day=$_POST["start_day"];
 $bill_end_day=$_POST["end_day"];
 echo" $bill_start_day  $bill_end_day";
if ($_POST["type_filter"]=="Theo loại điện thoại"){

$sql = "SELECT SUM(bd.total_price) as doanhthu ,bill.bill_id, bd.item_id, product.item_name 
        FROM bill,bill_detail bd,product 
        WHERE bill.bill_id=bd.bill_id AND bd.item_id=product.item_id AND bill.date>='$bill_start_day' AND bill.date<='$bill_end_day'
        GROUP BY bd.item_id";
$statement = $conn->prepare($sql);
$statement->execute();

$result=$statement->fetchAll();


echo "<thead><tr ><td>Mã Sản Phẩm</td>" .
    "<td>Tên Sản Phẩm</td>".
    "<td>Doanh thu</tr></td></thead>";
echo"<tbody>";
  // output data of each row
  foreach($result as $row) {
    echo '<tr><td>' . $row["item_id"]. "</td>" .
    "<td>".$row["item_name"]."</td>".
    "<td>".$row["doanhthu"]."</td></tr>";
    }
   // echo" $sql";
echo"</tbody>";
}
else
if ($_POST["type_filter"]=="Theo hãng điện thoại")
{
    $sql = "SELECT SUM(bd.total_price) as doanhthu ,bill.bill_id, product.item_brand 
        FROM bill,bill_detail bd,product 
        WHERE bill.bill_id=bd.bill_id AND bd.item_id=product.item_id AND bill.date>='$bill_start_day' AND bill.date<='$bill_end_day'
        GROUP BY product.item_brand";
    $statement = $conn->prepare($sql);
    $statement->execute();

    $result=$statement->fetchAll();


    echo "<thead><tr ><td><strong>Thương hiệu</strong></td>" .
        "<td><strong>Doanh thu</strong></td></thead>";

    // output data of each row
    echo"<tbody>";
    foreach($result as $row) {
        echo '<tr><td>' . $row["item_brand"]. "</td>" .
        "<td>".$row["doanhthu"]."</td>";
    }
    echo"</tbody>";
}
else
if ($_POST["type_filter"]=="Tổng doanh thu")
{
    $sql = "SELECT SUM(bd.total_price) as doanhthu  
        FROM bill,bill_detail bd
        WHERE bill.bill_id=bd.bill_id AND bill.date>='$bill_start_day' AND bill.date<='$bill_end_day'";  
    $statement = $conn->prepare($sql);
    $statement->execute();

    $result=$statement->fetchAll();


    echo "<thead><tr >" .
        "<td><strong>Doanh thu</strong></td></thead>";
    echo"<tbody>";
    // output data of each row
    foreach($result as $row) {
        echo '<tr><td>'.$row["doanhthu"].'</td></tr>';
    }
    echo"</tbody>";
}
?>
