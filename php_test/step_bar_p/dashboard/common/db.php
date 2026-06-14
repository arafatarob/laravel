<?php
  $conn = new mysqli('localhost', 'root', '', 'post');

  if($conn->connect_error){
    die('Error ' . $conn->connect_error);
  }
?>
