<?php

// require MySQL Connection
$path = $_SERVER['DOCUMENT_ROOT']."/do-an-web/admin";
require "$path/database/DBController.php";

// require Product Class
require "$path/database/Product.php";



// connController object
$conn = new DBController();
// Product object
$product = new Product($conn);
$product_shuffle = $product->getData();

