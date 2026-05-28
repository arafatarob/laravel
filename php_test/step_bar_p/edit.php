<?php
  include('./config/db.php');


  if(isset($_POST['update'])){

    $id = $_SESSION['user_id'];
    $id = $_POST['user_id'];
    $fName = $_POST['fname'];
    $lName = $_POST['lname'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $update = $conn->query("UPDATE users SET fname='$fName', lname='$lName', number='$number', address='$address', message='$message'
     WHERE id='$id'");

     if($update){
         echo "<script> alert('update successfully'); window.location.href='./dashboard/profile.php'; </script>";
         exit();
     }else{
         die("connection errro" . $conn->connect_error);
     }
  }

?>
