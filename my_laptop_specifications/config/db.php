<?php

  $conn = new mysqli("localhost", "root", "", "my_laptop_db");

  if($conn->connect_error){
    die("error" . $conn->connect_error);
  }

?>
