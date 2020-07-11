<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $database = "tymobile";

  $conn = mysqli_connect($host, $user, $password, $database);
  if ($conn->connect_error){
      echo "Fail " . $conn->connect_error;
  }
  mysqli_set_charset($conn, 'utf8');