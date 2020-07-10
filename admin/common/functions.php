<?php
session_start();
if(!isset($_SESSION["userType"]) || intval($_SESSION["userType"]) != 1) {
  require_once '../common/404.php';
}

// require MySQL Connection
$path = $_SERVER['DOCUMENT_ROOT']."/git/do-an-web/admin";
require "$path/database/DBController.php";

// require Product Class
require "$path/database/Product.php";



// connController object
$conn = new DBController();
// Product object
$product = new Product($conn);
$product_shuffle = $product->getData();

