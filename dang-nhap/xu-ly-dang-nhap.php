<?php

  if (!empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    include('database.php');
    
    $isLoggedIn = processLogin($username, $password);
    if (! $isLoggedIn) {
      $_SESSION["errorMessage"] = "Sai tên đăng nhập hoặc mật khẩu";
      header("Location: ./");
    } else {
      if (intval($_SESSION["userType"]) == 1) {
        header("Location: ../admin");
      } else {
        header("Location: ../trang-chu");
      }
    }
    exit();
  }