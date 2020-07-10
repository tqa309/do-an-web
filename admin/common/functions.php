<?php


// require MySQL Connection
$path = $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/admin";
require "$path/database/DBController.php";

// require Product Class
require "$path/database/Product.php";



// connController object
$conn = new DBController();
// Product object
$product = new Product($conn);
$product_shuffle = $product->getData();

function sessionTimeOut($time)
{
	$login_session_duration = $time;
	if (isset($_SESSION['login_time'])) {
		if (((time() - $_SESSION['login_time']) > $login_session_duration)) {
			deleteUserSecssion();
		}
	}
}
function deleteUserSecssion()
{
	unset($_SESSION['user_id']);
	unset($_SESSION['username']);
	unset($_SESSION['user_type']);
	unset($_SESSION['login_time']);
}
