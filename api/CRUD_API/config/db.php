<?php
  $conn = new mysqli("localhost", "root", "", "api_db");

  if ($conn->connect_error) {
    die($conn->connect_error);
  }

?>
