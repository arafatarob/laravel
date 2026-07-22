<?php
session_start();
  require('../config/db.php');

  $currentId = $_SESSION['user_id'];
  $select = $conn->query("SELECT * FROM orders WHERE user_id = '$currentId' ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <script src="https://kit.fontawesome.com/e68d9b315c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/dashboard.css">
  </head>
  <body>

      <?php
        require("./common/header.php");
        require("./common/sidebar.php");
      ?>
      <div class="form-container">
        <form class="order_submit" action="../action/user_order_submit.php" method="post">
          <div class="cross_icon">
              <i class="fa-regular fa-circle-xmark"></i>
          </div>
          <h2>create an order</h2>
          <div class="form-row">
            <div class="inputBox details">
              <textarea type="text" name="details" value="" class="form-controll" placeholder="enter the contract details"></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="inputBox date">
              <input type="date" name="date" value="" class="form-controll">
            </div>
          </div>

          <div class="form-row d-flex">
            <div class="inputBox name">
              <input type="text" name="clientName" value="" class="form-controll" placeholder="client name">
            </div>
            <div class="inputBox type">
              <input type="text" name="type" value="" class="form-controll" placeholder="enter type">
            </div>
            <div class="inputBox amount">
              <input type="text" name="amount" value="" class="form-controll" placeholder="enter amount">
            </div>
          </div>

          <div class="form-row clientIn">
              <input type="checkbox" name="onClientBox" value="" id="client" class="">
              <label for="client">Client Information</label>
          </div>

          <div class="form-row d-flex clientInfo">
            <div class="inputBox">
              <input type="text" name="clientID" value="" class="form-controll" placeholder="client ID">
            </div>
            <div class="inputBox password">
              <input type="text" name="clientPassword" value="" class="form-controll" placeholder="enter password">
            </div>
          </div>

          <div class="form-row">
            <div class="inputBox">
              <input type="text" name="platform" value="" class="form-controll" placeholder="plartform name">
            </div>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="bttn" id="orderBtn" name="button">add order</button>
          </div>
        </form>
      </div>
    <main id="appendPopup">
      <div class="orders">
        <div class="title">
          <div class="">
            All order's
          </div>
          <div class="addBox">
            add order's
          </div>
        </div>
        <table>
          <?php
            if($select->num_rows == 0) {
          ?>
            <h2 class='no_order'>you have no order!</h2>
          <?php } else { ?>
            <tr>
            <th>contract ID</th>
            <th>Details</th>
            <th>Completed</th>
            <th>client</th>
            <th>type</th>
            <th>amount</th>
            <th>platform</th>
            <th>ID</th>
            <th>password</th>
            <th>status</th>
            <th>action's</th>
          </tr>
          <?php
            while ($order = $select->fetch_assoc()) {
          ?>
          <tr>
            <td>#<?= $order['contract_ID'] ?></td>
            <td><?= $order['Contract_Details'] ?></td>
            <td><?= $order['contract_date'] ?></td>
            <td><?= $order['client'] ?></td>
            <td><?= $order['type'] ?></td>
            <td>$<?= $order['amount'] ?></td>
            <td><?= $order['platform_name'] ?></td>
            <td><?= $order['client_id'] ?></td>
            <td><?= $order['client_password'] ?></td>
            <td><?= $order['status'] ?></td>
            <td class="bttns">
                <div class="edit">
                  <a href="../action/edit_order.php?id=<?= $order['id'] ?>"><i class="fa-solid fa-pen-ruler"></i></a>
                </div>
            </td>
          </tr>
          <?php } ?>
          <?php } ?>
        </table>
      </div>
    </main>

    <script src="../assets/dashboard.js" charset="utf-8"></script>
  </body>
</html>
