<?php

  require('../config/db.php');

  $select = $conn->query("SELECT users.id, users.name, users.email, users.role, users.password, users.created_at, role.role_name
     FROM users INNER JOIN role ON users.role = role.id");


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
      <div class="users">
        <div class="title">
          <div class="">
            All user's
          </div>
        </div>
        <table>
          <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>created users</th>
            <?php if($_SESSION['user_role'] === 'CEO' || $_SESSION['user_role'] === 'Manager'){ ?>
              <th>action's</th>
            <?php } ?>
          </tr>
          <?php
            while ($users = $select->fetch_assoc()) {
          ?>
          <tr>
            <td>#<?= $users['id'] ?></td>
            <td><?= $users['name'] ?></td>
            <td><?= $users['email'] ?></td>
            <td><?= $users['role_name'] ?></td>
            <td><?= $users['created_at'] ?></td>
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
