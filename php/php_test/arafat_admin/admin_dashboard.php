<?php require('function/db.php') ?>

<?php
    if(isset($_POST['order_status'])){
      $order_id = $_POST['order_id'];
      $status = $_POST['status'];

      $myDB->query("UPDATE orders  SET status='$status' WHERE id = 2");
    }

 ?>

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


          <div class="manageOrders">
              <table>

                <tr>
                  <th>User</th>
                  <th>amount</th>
                  <th>status</th>
                  <th>action</th>
                </tr>

                <?php
                $user = $myDB->query("SELECT orders.*, users.name FROM orders JOIN users ON orders.user_id = users.id ORDER BY id DESC");
                while($order = $user->fetch_assoc()):

                  ?>

                <tr>
                  <td>#<?php echo $order['id'] ?></td>
                  <td><?php echo $order['name'] ?></td>
                  <td>$<?php echo $order['total_amount'] ?></td>
                  <td><?php echo $order['status'] ?></td>
                  <td>
                      <form method="post">

                          <input type="hidden" name="order_id" value="<?php echo $order=['id']; ?>">
                        <select class="select" name="status">
                          <option value="pending">pending</option>
                          <option value="processing">processing</option>
                          <option value="completed">completed</option>
                          <option value="cancelled">cancelled</option>
                        </select>
                        <button type="submit" name="order_status">Update</button>
                      </form>
                  </td>
                </tr>
              <?php endwhile; ?>
              </table>
          </div>

    </main>


  </body>
</html>
