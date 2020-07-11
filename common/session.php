<?php

  function getMemberById($memberId)
  {
    require_once('database_mysqli.php');
    $query = "select * FROM user WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('d', $userId);
    $userId = $conn->real_escape_string($memberId);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    return $row;
  }