<?php
session_start();
  include('db.php');

  if(!isset($_SESSION['user_id'])){
    header("Location: ../login.php");
  }

  $id = $_SESSION['user_id'];
  $name = $_SESSION['name'];
  $role = $_SESSION['role'];
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/dashboard.css">
  </head>
  <body>
<header>
  <div class="left_side">
    welcome to, <span><?php echo $role ?></span> dashboard
  </div>
  <div class="right_side">
    <span><?php echo $name; ?></span>
    <a href="../log_out.php">logout</a>
  </div>
</header>
