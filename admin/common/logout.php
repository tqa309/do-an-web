<?php 
$path = $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/admin";
require "$path/common/functions.php";

session_start();

deleteUserSecssion();
$linkto = "http://" . $_SERVER['SERVER_NAME'];

header("Location:$linkto/do-an-web/");
