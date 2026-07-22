<?php
  session_start();
  require('../config/db.php');

  $orderId = $conn->real_escape_string($_GET['id']);
  $delete = "DELETE FROM orders WHERE  id = ?";
  $stm = $conn->prepare($delete);
  $stm->bind_param("i", $orderId);
  $stm->execute();

  if($conn->real_escape_string('$stm')){
    if($_SESSION['user_role'] === 'CEO' || $_SESSION['user_role'] === 'Manager'){
      header("Location: ../dashboard/orders.php");
    }else{
      header("Location: ../dashboard/my_order.php");
    }
  }else{
    if($_SESSION['user_role'] === 'CEO' || $_SESSION['user_role'] === 'Manager'){
      header("Location: ../dashboard/orders.php");
    }else{
      header("Location: ../dashboard/my_order.php");
    }
  }

?>
