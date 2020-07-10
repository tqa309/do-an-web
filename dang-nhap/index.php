<?php
session_start();
if(!empty($_SESSION["userId"])) {
  header("Location: ../trang-chu");
} else {
  require_once 'dang-nhap.php';
}
?>