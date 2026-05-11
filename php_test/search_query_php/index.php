<?php require('connection.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Result</title>
    <style media="screen">

      table, tr, th, td{
        border: 1px solid #000;
        border-collapse: collapse;
        padding: 7px;
      }
      table{
        width: 1100px;
        margin: 30px auto;
      }
    </style>
  </head>
  <body>

    <form method="get">

      <input type="text" name="search" value="" placeholder="search...">

      <input type="submit" name="searchBtn" value="search">

    </form>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Password</th>
        <th>Action</th>
      </tr>

      <?php
          $result = $connect->query("SELECT * FROM users ORDER BY id DESC");

          if(isset($_GET['searchBtn'])){
            $search_term = $_GET['search'];
            $sql = "SELECT * FROM users WHERE concat(name, email, user_id) LIKE '%$search_term%'";

            $result = mysqli_query($connect, $sql);
          }


            while($user = $result->fetch_assoc()) {
       ?>

      <tr>
        <td>#<?php echo $user['user_id'] ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['number'] ?></td>
        <td><?php echo $user['role'] ?></td>
        <td><?php echo $user['password'] ?></td>
        <td class="actions">
            <a class="edit-link" href="update_user.php?id=<?php echo $user['id'] ?>">update</a>
            <a class="delete-link" href="delete.php?user_name=<?php echo $user['name'] ?>">delete</a>
            <a class="edit-link" href="view.php?id=<?php echo $user['id'] ?>">view</a>
        </td>
      </tr>

    <?php

    }

      ?>

    </table>

  </body>
</html>
