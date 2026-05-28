
<?php

include('../config/db.php');

  include('./common/header.php');
  include('./common/sidebar.php');

  $select = $conn->query("SELECT * FROM users WHERE id='$id'");
  $users = $select->fetch_assoc();
?>
<style media="screen">
main {
    color: #fff;
    margin-top: 91px;
    margin-left: 230px;
    width: calc(100% - 250px);
}
</style>
<main>
  <div class="title">
    profile
  </div>
  <div class="profile">
    <div class="left_side_profile">
      <div class="top">
        <div class="name">
          <?php echo "Name :" . " " . $users['fname'] . " " . $users['lname'] ?>
        </div>
        <div class="role">
          <?php echo " Role : " . " " . $users['role'] ?>
        </div>
      </div>
      <div class="email">
        <?php echo " Email : " . " " . $users['email'] ?>
      </div>
      <div class="number">
        <?php echo " Number : " . " " . $users['number'] ?>
      </div>
      <div class="address">
        <?php echo " Address : " . " " . $users['address'] ?>
      </div>
      <div class="password">
        <?php echo " Password : " . " " . $users['password'] ?>
      </div>
      <div class="message">
        <?php echo " Message : " . " " . $users['message'] ?>
      </div>
    </div>
    <div class="right_side_profile">
      <form action="../edit.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $users['id']; ?>">
        <div class="form_step" id="name">
          <div>
            <label>first name :</label>
            <input type="text" name="fname" value="<?php echo $users['fname'] ?>">
          </div>
          <div>
            <label>last name :</label>
            <input type="text" name="lname" value="<?php echo $users['lname'] ?>">
          </div>
        </div>
        <div class="form_step" id="email">
            <label>number :</label>
            <input type="text" name="number" value="<?php echo $users['number'] ?>">
        </div>
        <div class="form_step" id="address">
            <label>address :</label>
            <input type="text" name="address" value="<?php echo $users['address'] ?>">
        </div>
        <div class="form_step" id="message">
            <label>message :</label>
            <input type="text" name="message" value="<?php echo $users['message'] ?>">
        </div>
        <div class="buttonBox">
          <button type="submit" name="update">update</button>
        </div>
      </form>
    </div>
  </div>

</main>
