<?php
  include('../common/database_mysqli.php');
  session_start();
  if (isset($_SESSION['userId']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['district']) && isset($_POST['phone']) && isset($_POST['paymentMethod'])) {
    $sql = 'INSERT INTO `bill` (`user_id`, `date`, `status`, `pay`, `total`, `phone`, `province`, `district`, `address`, `receiver`) VALUES (?,?,?,?,?,?,?,?,?,?)';
    $date = strval(date("Y-m-d h:i:s"));
    $stmt = $conn->prepare($sql);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    $province = mysqli_real_escape_string($conn, $_POST['city']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $receiver = mysqli_real_escape_string($conn, $_POST['lastName']) . ' ' . mysqli_real_escape_string($conn, $_POST['firstName']);
    $pay = 'Chưa thanh toán';
    $status = 'Chưa chuyển';
    $stmt->bind_param('dsssdsssss', $_SESSION['userId'], $date, $status, $pay, $total, $phone, $province, $district, $address, $receiver);
    $stmt->execute();

    $sql = 'SELECT * FROM bill WHERE `user_id` = ? AND `date` = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $_SESSION['userId'], $date);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    $bill_id = $row['bill_id'];

    $sql = 'SELECT * FROM cart c join product p on c.item_id = p.item_id WHERE user_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $_SESSION['userId']);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
      $sql = 'INSERT INTO `bill_detail` (`bill_id`, `item_id`, `quantity`, `price`, `total_price`) VALUES (?,?,?,?,?)';
      $stmt = $conn->prepare($sql);
      $total_price = intval($row['item_price']) * intval($row['quantity']);
      $stmt->bind_param('ddddd', $bill_id, $row['item_id'], $row['quantity'], $row['item_price'], $total_price);
      $stmt->execute();
    }

    $sql = 'DELETE FROM cart WHERE user_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $_SESSION['userId']);
    $stmt->execute();
    
    header('Location: ./thanh-cong');
  }