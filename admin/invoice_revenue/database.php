<?php
$servername = "localhost";
$username = "root";
$password = "Tuananh19022k";


  $conn = new PDO("mysql:host=$servername;dbname=shopee", $username, $password);
  // set the PDO error mode to exception
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();

?>