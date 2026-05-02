<?php
    require('function/db.php');

  if(isset($_POST['confirm_order'])){
    $product_id = $_POST['product_id'];
    $price = $_POST['product_price'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $user_id = 2;

    $insertUser = "INSERT INTO orders(user_id, total_amount, status)
                              VALUES($user_id, $price, 'pending')";

    if($myDB->query($insertUser)){
      $order_id = $myDB->insert_id;

      $sql_item = "INSERT INTO order_items(order_id, product_id, quantity, unit_price)
          VALUES($order_id, $product_id, 1, $price)";

          $myDB->query($sql_item);

          header("Location: user_dashboard.php?msg=order Successfull!");
    }else{
      echo "error: " . $myDB->error;
    }
  }

 ?>
