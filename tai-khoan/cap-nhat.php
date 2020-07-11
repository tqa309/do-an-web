<?php
  include('../common/database_mysqli.php');
  
  $sql = 'UPDATE user 
    SET first_name = ?,
      last_name = ?,
      address = ?
    WHERE username = ?';
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('ssss', $first_name, $last_name, $address, $username);
  $last_name = $conn->real_escape_string($_POST['last_name']);
  $first_name = $conn->real_escape_string($_POST['first_name']);
  $address = $conn->real_escape_string($_POST['address']);
  $username = $conn->real_escape_string($_POST['username']);
  $stmt->execute();
  echo 'Thong tin duoc cap nhat';
  $conn->close();
