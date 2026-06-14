<?php

  session_start();
  require('../config/db.php');

?>
<header>
  <div class="welcome">
    welcome <?php echo $_SESSION['user_name']; ?>, 
    in your <?php echo $_SESSION['user_role'] ?> dashboard
  </div>
  <div class="account_info">
  <div class="toggle_container">
    <label id="toggle">
        <input type="checkbox" id="toggleCheck">
        <span id="slider"></span>
    </label>
  </div>
    <div class="account_inner">
      <h2><?php echo $_SESSION['user_name'] ?></h2>
      <a href="./common/logout.php">logout</a>
    </div>
  </div>
</header>
