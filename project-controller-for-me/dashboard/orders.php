<?php

  require('../config/db.php');

  $select = $conn->query("SELECT * FROM orders ORDER BY id DESC");


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dashboard</title>
    <script src="https://kit.fontawesome.com/e68d9b315c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/style.css">
  </head>
  <body>

      <?php
        require("./common/header.php");
        require("./common/sidebar.php");
      ?>
      <div class="form-container">
        <form class="order_submit" action="../action/order_submit.php" method="post">
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

          <div class="form-row">
            <div class="inputBox">
              <select class="form-controll" name="status">
                <option value="">select</option>
                <option value="pending">pending</option>
                <option value="completed">completed</option>
                <option value="cancalled">cancalled</option>
              </select>
            </div>
          </div>

          <div class="form-row d-flex">
            <div class="inputBox id">
              <input type="text" name="clientID" value="" class="form-controll" placeholder="client ID">
            </div>
            <div class="inputBox password">
              <input type="text" name="clientPassword" value="" class="form-controll" placeholder="enter password">
            </div>
          </div>

          <div class="form-row">
            <div class="inputBox id">
              <input type="text" name="platform" value="" class="form-controll" placeholder="plartform name">
            </div>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="bttn" name="button">add order</button>
          </div>

        </form>
      </div>
    <main>
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
          <tr>
            <th>contract_ID</th>
            <th>Contract / Details</th>
            <th>date</th>
            <th>client name</th>
            <th>contract type</th>
            <th>amount</th>
            <th>platform name</th>
            <th>contract_status</th>
            <?php if($_SESSION['user_role'] === 'CEO' || $_SESSION['user_role'] === 'Manager'){ ?>
                <th>action's</th>
            <?php } ?>
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
            <td><?= $order['status'] ?></td>
            <?php if($_SESSION['user_role'] === 'CEO' || $_SESSION['user_role'] === 'Manager'){ ?>
            <td class="bttns">
              <?php if($_SESSION['user_role'] === 'CEO'){ ?>
                <div class="delete">
                  <a href="#">delete</a>
                </div>
                <div class="edit">
                  <a href="#">edit</a>
                </div>
              <?php } ?>
              <?php if($_SESSION['user_role'] === 'Manager'){ ?>
                <div class="edit">
                  <a href="#">edit</a>
                </div>
                <?php } ?>
            </td>
            <?php } ?>
          </tr>
        <?php } ?>
        </table>
      </div>
    </main>

    <script src="../assets/script.js" charset="utf-8"></script>
  </body>
</html>
