<?php

  $host = 'localhost:3306';
  $dbname = 'shopee';
  $user = 'root';
  $pass = '';

  $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  function getMemberById($memberId)
  {
    $query = "select * FROM user WHERE user_id = :userId";
    $memberResult = $GLOBALS['conn']->prepare($query);
    $memberResult->execute(array(
      ':userId' => $memberId
    ));
    $row = $memberResult->fetch(PDO::FETCH_ASSOC);
    return $row;
  }

  function processLogin($username, $password) {
    $query = "select password, user_id, user_type FROM user WHERE username = :username";
    $memberResult = $GLOBALS['conn']->prepare($query);
    $memberResult->execute(array(
      ':username' => $username
    ));
    $row = $memberResult->fetch(PDO::FETCH_ASSOC);
    $pass = $password;
    $passToCheck = $row['password'];
    $passIsGood = password_verify($pass, $passToCheck);

    if($passIsGood) {
      $_SESSION["userType"] = $row["user_type"];
      $_SESSION["userId"] = $row["user_id"];
      return true;
    }
  }
