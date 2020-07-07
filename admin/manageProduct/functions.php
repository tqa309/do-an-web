<?php

// require MySQL Connection
require ('./DBController.php');

// require Product Class
require ('./Product.php');



// connController object
$conn = new DBController();
// Product object
$product = new Product($conn);
$product_shuffle = $product->getData();

