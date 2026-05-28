<aside class="">
  <div class="title">
    sidebar
  </div>
  <div class="sidebar">
    <ul>
      <li class="active"><a href="overview.php"><span class="material-symbols-outlined">home</span> dashboard</a></li>
      <?php if($role === 'admin'){ ?>
        <li><a href="user.php"><span class="material-symbols-outlined">person</span> users</a></li>
        <li><a href="product.php"><span class="material-symbols-outlined">storefront</span> product</a></li>
      <?php } ?>
      <li><a href="myOrder.php"><span class="material-symbols-outlined">order_approve</span> My Order's</a></li>
      <li><a href="profile.php"><span class="material-symbols-outlined">person_text</span> profile</a></li>
      <li><a href="#"><span class="material-symbols-outlined">settings_alert</span> setting</a></li>



    </ul>
  </div>
  <div class="bottom_sidebar">
    <div class="name">
      <?php echo $name ?>
    </div>
    <div class="logout">
      <a href="../log_out.php">logout</a>
    </div>
  </div>
</aside>



  <script src="../js/dashboard.js" charset="utf-8"></script>
  </body>
</html>
