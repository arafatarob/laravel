<?php require('function/db.php'); $user_id = 2; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

    <header>
        <h1>Arafat - Store</h1>
    </header>

    <main>
      <h2 class="myOrder">My orders</h2>

      <table>
        <tr>
          <th>Order ID</th>
          <th>Total Amount</th>
          <th>Status</th>
          <th>Date</th>
        </tr>

        <?php
          $order = $myDB->query("SELECT * FROM orders WHERE user_id = $user_id ORDER BY id DESC");

          while($user = $order->fetch_assoc()){
        ?>

        <tr>
          <td>#<?php echo $user['id'] ?></td>
          <td><?php echo $user['total_amount'] ?></td>
          <td>
              <span class="<?php echo $user['status'] == 'pending' ? 'bg-yellow' :
              ($user['status'] == 'completed' ? 'bg-green' : 'bg-blue'); ?>">

              <?php echo strtoupper($user['status']); ?>
            </span>
          </td>
          <td><?php echo $user['created_at'] ?></td>

        </tr>

      <?php } ?>


      </table>

    </main>

  </body>
</html>
