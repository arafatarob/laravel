<?php

  require('../config/db.php');

  $select = $conn->query("SELECT COUNT(id) AS total_users FROM users");
  $select_order = $conn->query("SELECT COUNT(id) AS total_orders FROM orders");
  $select_earning = $conn->query("SELECT SUM(amount) AS total_earning FROM orders");
  $select_complete = $conn->query("SELECT COUNT(id) AS completed_order FROM orders where status='completed' ");
  $select_pending = $conn->query("SELECT COUNT(id) AS pending_order FROM orders where status='pending' ");
  $select_cancalled = $conn->query("SELECT COUNT(id) AS cancalled_order FROM orders where status='cancalled' ");


  $t_earning = $select_earning->fetch_assoc();
  $T_users = $select->fetch_assoc();
  $T_orders = $select_order->fetch_assoc();
  $C_orders = $select_complete->fetch_assoc();
  $P_orders = $select_pending->fetch_assoc();
  $c_orders = $select_cancalled->fetch_assoc();


  if($t_earning == null){
    $t_earning = 0;
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="../assets/style.css">
  </head>
  <body>

      <?php
        require("./common/header.php");
        require("./common/sidebar.php");
      ?>
    <main>
      <div class="dashboard">
        <div class="title">
          dashboard overview
        </div>
        <div class="summery_inner">
          <div class="summery1 summery">
            <h2>Total User's : <br> <span><?php echo sprintf('%02d', $T_users['total_users']) ?></span></h2>
          </div>
          <div class="summery2 summery">
            <h2>Total Earning's : <br> <span><?php echo "$" . $t_earning['total_earning'] ?></span></h2>
          </div>
          <div class="summery2 summery">
            <h2>Total order's : <br> <span><?php echo sprintf('%02d', $T_orders['total_orders']) ?> </span></h2>
          </div>
          <div class="summery4 summery">
            <h2>Completed order's : <br> <span><?php echo sprintf('%02d', $C_orders['completed_order']) ?></span></h2>
          </div>
          <div class="summery5 summery">
            <h2>pending order's : <br> <span><?php echo sprintf('%02d', $P_orders['pending_order']) ?></span></h2>
          </div>
          <div class="summery6 summery">
            <h2>cancalled order's : <br> <span><?php echo sprintf('%02d', $c_orders['cancalled_order']) ?></span></h2>
          </div>
        </div>
      </div>
    </main>

    <script src="../assets/script.js" charset="utf-8"></script>
  </body>
</html>
