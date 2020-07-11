<?php
session_start();
if($_SESSION["userId"] == "") {
  header('Location: ../dang-nhap');
} else {
  require_once 'thanh-toan.php';
}
?>