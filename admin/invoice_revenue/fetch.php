<?php
include 'database.php';
$sql = "SELECT `bill_id`,`first_name`,`last_name`,`date`,`total`,`status`,`pay` FROM `bill`,`user` WHERE bill.user_id=user.user_id";
$statement = $conn->prepare($sql);
$statement->execute();

$result=$statement->fetchAll();




  // output data of each row
  foreach($result as $row) {
    echo '<tr id="'.$row["bill_id"].'"><td>' . $row["bill_id"]. "</td>" .
    //"<td>".$row["user_id"]."</td>".
    "<td>".$row["first_name"]." ".$row["last_name"]."</td>".
    "<td>".$row["date"]."</td>".
    "<td>".$row["status"]."</td>".
    "<td>".$row["pay"]."</td>".
    "<td>".$row["total"]."</td>".
    '<td><button type="button" onclick="bill_detail('.$row["bill_id"].')" data-toggle="modal" data-target="#modal_bill_detail">Chi tiết</button>'.
    '<button id="btn_change" type="button" onclick="bill_change('.$row["bill_id"].')" data-toggle="modal" data-target="#modal_bill_change">Sửa</button></td></tr>';
}


?>