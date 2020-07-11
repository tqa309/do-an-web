<?php
  include('../common/database_mysqli.php');
  session_start();
  if (isset($_SESSION['userId']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['username']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['district']) && isset($_POST['phone']) && isset($_POST['paymentMethod'])) {
    
  }