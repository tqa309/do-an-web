<?php
  $host = 'localhost:3306';
  $dbname = 'tymobile';
  $user = 'root';
  $pass = '';

  $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));