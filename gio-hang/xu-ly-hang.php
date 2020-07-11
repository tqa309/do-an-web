<?php

require_once '../common/database_pdo.php';

if (isset($_POST['userId']) && isset($_POST['itemId']) && isset($_POST['quantity']) && intval($_POST['userId']) != -1) {
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
else {
  if (!isset($_COOKIE['user'])) {
    $cart = array();
    setcookie('user', serialize($cart), time() + 86400 * 14, '/', null);
  }
  $cart = unserialize($_COOKIE['user']);
  $key = array_search($_POST['itemId'], array_column($cart, 'itemId'));
  if ($key !== FALSE) {
    $cart[$key]['quantity'] += intval($_POST['quantity']);
    if ($cart[$key]['quantity'] <= 0) unset($cart[$key]);
    setcookie('user', serialize($cart), time() + 86400 * 14, '/', null);
  } else {
    $cart[] = array(
      'itemId' => $_POST['itemId'],
      'quantity' => intval($_POST['quantity'])
    );
    setcookie('user', serialize($cart), time() + 86400 * 14, '/', null);
  }
  
  echo array_sum(array_column($cart, 'quantity'));
}