<?php
  session_start();

  require('../config/db.php');

  $orderId = $_SESSION['user_id'] . rand(1524, 99999);

  if (!empty('$_POST')) {
    $user_id = $_SESSION['user_id'];
    $details = $_POST['details'];
    $date = $_POST['date'];
    $c_name = $_POST['clientName'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $c_id = $_POST['clientID'];
    $c_pass = $_POST['clientPassword'];
    $platform = $_POST['platform'];
    $created_at = date('y-m-d, H:i:s');

    $insert = "INSERT INTO orders(user_id, contract_ID, contract_Details, contract_date, client, type, amount, status, client_id, client_password, platform_name, created_at)
    VALUES('$user_id', '$orderId', '$details', '$date', '$c_name', '$type', '$amount', 'Pending', '$c_id', '$c_pass', '$platform', '$created_at')
    ";

    $order = mysqli_query($conn, $insert);

    if($order){
      echo 'order created';
      header('Location: ../dashboard/my_order.php');
    }else{
      echo "order created unsuccessfull";
    }
  }

?>
