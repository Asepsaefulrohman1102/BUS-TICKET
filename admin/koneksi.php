<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $db="bus";

  $conn = new mysqli($servername,$username,$password,$db);

  if ($conn->connect_error) {
    die("connection failed :". $conn->connect_error);
  }
  // echo "connected Succes";

 ?>
