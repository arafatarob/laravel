<?php

$conn = new mysqli('localhost', 'root', '', 'post');

include('./common/header.php');
include('./common/sidebar.php');
$users = null;
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $select = $conn->query("SELECT * FROM users WHERE id = '$id'");
  $users = $select->fetch_assoc();
}

?>


<main>
  <div class="user_view">
    <div class="container">
      <form method="post">
        <a href="user.php"><span class="material-symbols-outlined">arrow_back_ios_new</span>  </a>
        <span class="backBtn">back</span>
      </form>
      <div class="card">
        <h3>User's Details</h3>
        <?php if($users){ ?>
          <div class="card_inner">
            <div class="card_d card_item">
              <span>name : <?php echo $users['fname'] . " " . $users['lname'] ?></span>
              <span><?php echo 'Role : ' . $users['role'] ?></span>
            </div>
            <div class=" card_item">
              Email : <span style="text-transform: lowercase;"><?php echo ' ' . $users['email'] ?></span>
            </div>
            <div class=" card_item">
              <span><?php echo 'Number : ' . $users['number'] ?></span>
            </div>
            <div class=" card_item">
              <span><?php echo 'Address : ' . $users['address'] ?></span>
            </div>
            <div class=" card_item">
              <span><?php echo 'Message : ' . $users['message'] ?></span>
            </div>

          </div>
        <?php } else { ?>
          <?php echo 'users not found' ?>
        <?php } ?>
      </div>
    </div>
  </div>
</main>
