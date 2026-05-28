<?php session_start();
include('db.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>shopping site</title>
  </head>
  <body>

    <?php
      if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
      }else{
        header("Location: ./dashboard/overview.php");
      }
      ?>

  </body>
</html>
