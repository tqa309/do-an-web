<?php
include'database.php';
if(isset($_POST["bill_id"])){
  $query ='SELECT `item_name`,`item_price`,`bill_detail_id`, `quantity` from `bill_detail`,`product`,`bill` WHERE bill_detail.bill_id=bill.bill_id=:bill_id AND bill_detail.item_id=product.item_id';
  $data = array(
    ':bill_id' => $_POST["bill_id"]
  );
  $statement = $conn->prepare($query);
  $statement->execute($data);
  $result=$statement->fetchAll();
  foreach($result as $row) {
    $thanhgia=strval(intval($row['quantity'])*intval($row['item_price']));
    echo <<<EOF
      <tr id=$row[bill_detail_id]> 
      <td>$row[item_name]</td>
      <td>$row[item_price]</td>
      <td>$row[quantity]</td>
      <td>$thanhgia</td> 
    EOF;
}

}

if(isset($_POST["bill_id_change"])){
  $data = array(
    ':bill_id_change' => $_POST["bill_id_change"]
  );

  $query ='UPDATE `bill` SET `status`="'.$_POST["status"].'" , pay="'.$_POST["pay"].'" WHERE bill_id='.$_POST["bill_id_change"].'';
  $statement = $conn->prepare($query);
  $statement->execute($data);
  echo "ok";

}
?>
