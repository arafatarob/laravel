
<?php

  include('./common/header.php');
  include('./common/sidebar.php');


?>
<main>
  <div class="title">
    users
  </div>
  <table>
    <tr>
      <th>name</th>

      <th>email</th>

      <th>Number</th>

      <th>message</th>

      <th>address</th>

      <th>role</th>

      <th>action</th>


    </tr>
    <?php
      $select = $conn->query("SELECT * FROM users");
      while($users = $select->fetch_assoc()):
    ?>
    <tr>
      <td><?= $users['fname'] . " " . $users['lname'] ?></td>
      <td><?= $users['email'] ?></td>
      <td><?= $users['number'] ?></td>
      <td><?= $users['message'] ?></td>
      <td><?= $users['address'] ?></td>
      <td><?= $users['role'] ?></td>
      <td>
        <a href="#">view</a>
        <a href="#">delete</a>
      </td>

    </tr>

  <?php endwhile; ?>

  </table>
</main>
