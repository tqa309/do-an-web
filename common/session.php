<?php

<<<<<<< HEAD
=======
  $host = 'localhost';
  $dbname = 'shopee';
  $user = 'root';
  $pass = '';

  $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

>>>>>>> e0d0178efb75a02848fc145fa126e1d530b937ab
  function getMemberById($memberId)
  {
    $host = 'localhost:3306';
    $dbname = 'shopee';
    $user = 'root';
    $pass = '';

    $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $query = "select * FROM user WHERE user_id = :userId";
    $memberResult = $conn->prepare($query);
    $memberResult->execute(array(
      ':userId' => $memberId
    ));
    $row = $memberResult->fetch(PDO::FETCH_ASSOC);
    return $row;
  }