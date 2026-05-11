<?php
session_start();
    require('common/connection.php');

    $role = $_SESSION['user_role'];

    if (!isset($_SESSION['name'])) {
    header('Location: login.php'); // Apnar login file-er nam ekhane din
    exit();
}

  $total = $connect->query("SELECT COUNT(id) AS total_users FROM users");

  $totalUser = mysqli_fetch_array($total);

  $netUsers = $totalUser['total_users'];




  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      a{
        text-decoration: none;
        background: blue;
        color: #fff;
        text-transform: uppercase;
        display: inline-block;
        padding: 10px 30px;
        border-radius: 6px;
        font-weight: 900;

      }

      body{
        flex-direction: column;
      }
      .input {
    display: flex;
    position: relative;
}
      .search {
        width: 300px;
        padding: 6px 20px;
        border-radius: 6px;
        border: none;
        outline: none;
        margin: 15px 0 15px 0;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(20px);
        color: #000;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(0, 0, 0, 0.5);
        position: relative;
      }

      .btn_search {
        width: 60px;
        padding: 6px 10px;
        border-radius: 6px;
        outline: none;
        background: blue;
        backdrop-filter: blur(20px);
        color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border: 0;
        font-weight: 700;
        position: absolute;
        right: 0;
        top: 16px;
      }
      .animate_div {
    display: flex;
    flex-direction: column;
    position: absolute;
    left: 10px;
    top: 18px;
    animation: searchAnim 5s infinite forwards;
    pointer-event: none;
}
.animate_div span {
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom: 15px;
}

@keyframes searchAnim {
  0%{
    top: 18px;
  }
  33%{
    top: -21px;
  }
  66%{
    top: -60px;
  }
  100%{
    top: 18px;
  }
}

.input {
    display: flex;
    position: relative;
    overflow: hidden;
}
    </style>
  </head>
  <body>

    <h1 style="margin-top: 20px;text-align:center;">Welcome, <br> <?php echo $_SESSION['name'] . " <br>" . 'Role :' . " " . $_SESSION['user_role'] ?> </h1>

    <h2>Users : <?php echo $netUsers ?></h2>

    <form method="get">
      <div class="input">
        <input type="text" name="search" class="search" placeholder="Search....">
          <!-- <div class="animate_div">
            <span>user name</span>
            <span>user ID</span>
            <span>user Email</span>
          </div> -->
        <input type="submit" name="searchBtn" value="Search" class="btn_search">
      </div>
    </form>

    <br>

    <?php if($role == "Admin") { ?>

        Admin

        <div class="view" style="margin-top: 50px;">
            <?php include('oneView.php') ?>
        </div>


    <?php } ?>

    <br>
<?php if($role == "HR") { ?>
    HR
<?php } ?>
    <br>
<?php if($role == "Manager") { ?>
    Manager
<?php } ?>
    <br><br><br>



    <br><br><br>




    <a href="logout.php">logout</a>

  </body>
</html>
