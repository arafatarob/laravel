
<?php

  include('./common/header.php');
  include('./common/sidebar.php');

  $total_customer = $conn->query("SELECT COUNT(id) AS total_user FROM users");
  $products = $conn->query("SELECT COUNT(id) AS total_product FROM products");
  $users = $total_customer->fetch_assoc();
  $product = $products->fetch_assoc();
  $product = $product['total_product'];
  $customer = $users['total_user'];


?>
<main>
  <div class="title">
    dashboard overview
  </div>
  <div class="overview">
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Our Product's</h3>" . $product ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
    <div class="totalUsers overviewBox">
        <?php  echo  "<h3>Satisfied Customer's</h3>" . $customer ?>
    </div>
  </div>
</main>
