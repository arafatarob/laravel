<?php
include('db.php');

  if(!empty($_POST)){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $textarea = $_POST['textarea'];
    $password = $_POST['password'];
    $conPassword = $_POST['con_password'];



    if($password !== $conPassword){
    // পরিবর্তন ২: 'dosen't' এর সিঙ্গেল কোটেশনের ঝামেলা এড়াতে "doesn't" করা হয়েছে
    echo "<script>alert('password doesn\'t match')</script>";
  }else{
    
    // পাসওয়ার্ড মিললেই কেবল ইনসার্ট কুয়েরি রান হবে
    $insert = $conn->query("INSERT INTO users(fname, lname, number, email, address, message, password)
        VALUES('$fname', '$lname', '$number', '$email', '$address', '$textarea', '$password')
    ");

    if($insert){
      header("Location: ../login.php");
      echo "<script>alert('form submitted')</script>";
    }else{
      echo "<script>alert('form not submitted')</script>";
    }

  }
  }

?>
