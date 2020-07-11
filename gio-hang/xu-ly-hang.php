<?php

require_once '../common/database_pdo.php';

if (isset($_POST['userId']) && isset($_POST['itemId']) && isset($_POST['quantity'])) {
  $sql = "SELECT * FROM cart WHERE user_id = :userId AND item_id = :itemId";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ':userId' => $_POST['userId'],
    ':itemId' => $_POST['itemId']
  ));
  $res = $stmt->fetch(PDO::FETCH_ASSOC);
  if (!empty($res)) {
      $sql = "UPDATE cart SET quantity = :quantity WHERE user_id = :userId AND item_id = :itemId";
      $stmt = $conn->prepare($sql);
      $stmt->execute(array(
        ':userId' => $_POST['userId'],
        ':itemId' => $_POST['itemId'],
        ':quantity' => intval($_POST['quantity']) + intval($res['quantity'])
      ));
      $sql = "DELETE FROM cart WHERE quantity = 0";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
  }
  else {
    $sql = "INSERT INTO cart (user_id, item_id, quantity) VALUES (:userId, :itemId, :quantity)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
      ':userId' => $_POST['userId'],
      ':itemId' => $_POST['itemId'],
      ':quantity' => $_POST['quantity']
    ));
  }
  $sql = "SELECT SUM(quantity) AS total FROM cart WHERE user_id = :userId";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(
    ':userId' => $_POST['userId'],
  ));
  $res = $stmt->fetch(PDO::FETCH_ASSOC);
  echo $res['total'];
}