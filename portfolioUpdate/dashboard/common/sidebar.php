<aside>
    <div class="titleBar">
      <i class="fa-solid fa-bars"></i> sidebar
    </div>
    <div class="sidebar_menu">
      <ul>
          <li class="active"><a href="./dashboard.php"><i class="fa-brands fa-dashcube"></i> dashboard</a></li>
        <?php
          if($_SESSION['user_role'] === 'CEO') {
        ?>
          <li><a href="./users.php"><i class="fa-regular fa-user"></i> user's</a></li>
          <li><a href="./orders.php"><i class="fa-solid fa-cart-arrow-down"></i> order's</a></li>
        <?php } ?>
        <?php if($_SESSION['user_role'] === 'User') { ?>
          <li><a href="./my_order.php"><i class="fa-solid fa-list"></i> My Order</a></li>
        <?php } ?>
        <li><a href="./profile.php"><i class="fa-solid fa-user-astronaut"></i> profile</a></li>

      </ul>
    </div>
    <div class="bottom_bar">
      <a href="./common/logout.php"> logout <i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</aside>
