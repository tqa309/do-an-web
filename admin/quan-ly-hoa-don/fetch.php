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
$sql = "SELECT `bill_id`,`receiver`,`phone`,`address`,`district`,`province`,`date`,`total`,`status`,`pay` FROM `bill`";
$statement = $conn->prepare($sql);
$statement->execute();

$result=$statement->get_result();
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr id="'.$row["bill_id"].'"><td>' . $row["bill_id"] . "</td>" .
    //"<td>".$row["user_id"]."</td>".
    "<td>".$row["receiver"]."</td>".
    "<td>".$row["phone"]."</td>".
    "<td>".$row["address"]." ".$row["district"]." ".$row["province"]."</td>".
    "<td>".$row["date"]."</td>".
    "<td>".$row["status"]."</td>".
    "<td>".$row["pay"]."</td>".
    "<td>".number_format($row["total"])."đ</td>".
    '<td><button type="button" onclick="bill_detail('.$row["bill_id"].')" data-toggle="modal" data-target="#modal_bill_detail">Chi tiết</button>'.
    '<button id="btn_change" type="button" onclick="bill_change('.$row["bill_id"].')" data-toggle="modal" data-target="#modal_bill_change">Sửa</button></td></tr>';
}


?>