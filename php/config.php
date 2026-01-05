<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chat_system_db";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  if($conn){
    echo "Database Connected Successfully!";
  } else {
    echo "Error: " . mysqli_connect_error();
  }
?>