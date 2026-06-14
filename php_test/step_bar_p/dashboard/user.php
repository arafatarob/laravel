<?php


  include('./common/header.php');
  include('./common/sidebar.php');
  $users = null;
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sel = $conn->query("SELECT * FROM users WHERE id='$id'");
    $users = $sel->fetch_assoc();
}



?>



<main>
  <div class="top">
    <div class="title">
      user's
    </div>
    <div class="add">
      <a href="#">add user's</a>
    </div>
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
      while($row = $select->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['fname'] . " " . $row['lname'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['number'] ?></td>
      <td><?= $row['message'] ?></td>
      <td><?= $row['address'] ?></td>
      <td><?= $row['role'] ?></td>
      <td>
        <a class="view" href="user_view.php?id=<?php echo $row['id'] ?>">view</a>
        <a href="#">edit</a>
        <a href="#">delete</a>
      </td>

    </tr>

  <?php endwhile; ?>



  </table>
</main>
