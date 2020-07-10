<?php 
  session_start();
  $_SESSION["userId"] = "";
  $_SESSION["userType"] = "";
  $_SESSION["username"] = "";
  session_destroy();
  header("Location: ../trang-chu");