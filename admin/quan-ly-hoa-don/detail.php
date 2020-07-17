<?php

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = "tymobile";

  $conn = mysqli_connect($host, $user, $password, $database);
  if ($conn->connect_error){
      echo "Fail " . $conn->connect_error;
  }
  mysqli_set_charset($conn, 'utf8');

if(isset($_POST["bill_id"])){
  $query ='SELECT `item_name`,`item_price`,`bill_detail_id`, `quantity`,`total_price` from `bill_detail`,`product`,`bill` WHERE bill_detail.bill_id=bill.bill_id AND bill_detail.bill_id=? AND bill_detail.item_id=product.item_id';
  $statement = $conn->prepare($query);
  $statement->bind_param('d', $_POST["bill_id"]);
  $statement->execute();
  $result=$statement->get_result();
  
  while($row = $result->fetch_assoc()) {
    $price = number_format($row['total_price']) . 'đ';
    $item_price = number_format($row['item_price']) . 'đ';
    echo <<<EOF
      <tr id=$row[bill_detail_id]> 
      <td>$row[item_name]</td>
      <td>$item_price</td>
      <td>$row[quantity]</td>
      <td>$price</td> 
    EOF;
}

}

if(isset($_POST["bill_id_change"])){
  $query ='UPDATE `bill` SET `status` = ?, pay = ? WHERE bill_id = ?';
  $statement = $conn->prepare($query);
  $statement->bind_param('ssd', $_POST["status"], $_POST["pay"], $_POST["bill_id_change"]);
  $statement->execute();
  echo "ok";

}
?>
