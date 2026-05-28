<?php
session_start();
include('db.php');

  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $conn->query("SELECT * FROM users WHERE email = '$email' ");

    $user = $sql->fetch_assoc();

    if($password === $user['password']){
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['name'] = $user['fname'] . " " . $user['lname'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['number'] = $user['number'];
      $_SESSION['address'] = $user['address'];
      $_SESSION['message'] = $user['message'];
      $_SESSION['role'] = $user['role'];
      header("Location: ../dashboard/overview.php");
      exit();
    }else{
      echo "password dosen't matched";
    }
  }

 ?>
