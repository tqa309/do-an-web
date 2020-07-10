<?php
session_start();
if(!isset($_SESSION["userType"]) || intval($_SESSION["userType"]) != 1) {
  require_once './common/404.php';
} else {
  header("Location: ./quan-li-san-pham");
}
?>