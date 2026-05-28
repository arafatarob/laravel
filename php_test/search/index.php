<?php include('db.php') ?>



<?php
session_start();

    if(!isset($_SESSION['user_id'])){
      header("Location: ./auth/auth.php");
      echo "You Must be logged in";
      exit();
    }

    $email = $_SESSION['user_email'];
    $name = $_SESSION['user_name'];
    $role = $_SESSION['user_role'];


    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .container{
        width: 1400px;
        margin: 0 auto;
            margin-top: 150px;
      }
      .card_inner {
    width: 100%;
    height: auto;
    padding: 35px 40px;
    border-radius: 10px;
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 20px;
    box-sizing: border-box;
}
.card {
    width: 425px;
    height: auto;
    box-shadow: 0 0 10px #4BB8FA;
    padding: 35px 40px;
    border-radius: 10px;
}
.card-image {
    width: 350px;
    height: 300px;
}
.card_btn a {
    outline: none;
    background: transparent;
    border: 1px solid #4BB8FA;
    padding: 6px 25px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    text-transform: uppercase;
    margin: 15px 0;
    display: inline-block;
    color: #44ACFF
}
    </style>
</head>
<body>


    <div class="input">
        <form action="" method="get">
            <input class="search_input" name="search" type="text" placeholder="Search Products......">
        </form>
    </div>

    <header>
      <div class="boxHeader">
        <div class="name">
          <?php echo "Name: " . $name ?>
        </div>
        <div class="role">
          <?php echo "Role: " . $role ?>
        </div>
      </div>


      <div class="menu">
        <ul>
          <li><a href="index.php">home</a></li>
          <?php if($role == 'admin'){ ?>
              <li><a href="all_products.php">all products</a></li>
          <?php } ?>
        </ul>
      </div>

        <div class="search_">
            <div class="icon">
                🔎
            </div>
        </div>
        <div class="boxRight">
          <div class="email">
            <?php echo "EMAIL: " . $email ?>
          </div>
          <div class="logout">
              <a href="logout.php">logout</a>
          </div>
        </div>
    </header>
    <!-- <script type="text/javascript">
      const logutBtn = document.querySelector('.logout a');
      logutBtn.addEventListener('click', function(e){
        e.preventDefault();
      });


    </script> -->


    <div class="container">
      <div class="page_title">
        Products
      </div>

      <div class="card_inner">

            <?php

              $sql = $conn->query("SELECT * FROM products");

              while($items = $sql->fetch_assoc()):

                  $img_src = !empty($items['image']) ? 'uploads/' . $items['image'] : 'uploads/avatar.png';

            ?>

                <div class="card">

                  <div class="card-image">
                      <img src="<?php echo $img_src ?>" alt="">
                  </div>
                  <div class="card-title">
                      <?= $items['name'] ?>
                  </div>
                  <div class="card-content">
                      With aerospace material and die-cast aluminum housing, which is waterproof, insect- proof and rust-proof
                  </div>

                  <div class="card-price">
                      <div>
                          <?= "Price:" . $items['price'] ?>
                      </div>
                      <div>
                          <?= "Stock:" . $items['stock'] ?>
                      </div>
                  </div>
                  <div class="card_btn">
                    <div class="">
                      <a href="#">add to cart</a>
                    </div>
                    <div class="">
                      <a href="#">buy now</a>
                    </div>
                  </div>

                </div>
    <?php endwhile; ?>

    </div>
    </div>


    <section class="top_product">
      <div class="container">
        <div class="page_title">
          Top Products
        </div>

        <div class="card_inner">

              <?php

                $sql = $conn->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 4");

                while($items = $sql->fetch_assoc()):

                    $img_src = !empty($items['image']) ? 'uploads/' . $items['image'] : 'uploads/avatar.png';

              ?>

                  <div class="card">

                    <div class="card-image">
                        <img src="<?php echo $img_src ?>" alt="">
                    </div>
                    <div class="card-title">
                        <?= $items['name'] ?>
                    </div>
                    <div class="card-content">
                        With aerospace material and die-cast aluminum housing, which is waterproof, insect- proof and rust-proof
                    </div>

                    <div class="card-price">
                        <div>
                            <?= "Price:" . $items['price'] ?>
                        </div>
                        <div>
                            <?= "Stock:" . $items['stock'] ?>
                        </div>
                    </div>
                    <div class="card_btn">
                      <div class="">
                        <a href="#">add to cart</a>
                      </div>
                      <div class="">
                        <a href="#">buy now</a>
                      </div>
                    </div>

                  </div>
      <?php endwhile; ?>

      </div>
      </div>
    </section>

    <script>
        const searchInput = document.querySelector(".input");
        const searchIcon = document.querySelector(".icon");

        searchIcon.addEventListener("click", ()=>{
            searchInput.classList.toggle('d-block');
        });


        const form = document.querySelector(".form");
        const btn = document.querySelector(".btn");
        const close = document.querySelector(".close");

        btn.addEventListener("click", function(){
            form.style.top = "0";
            form.style.opacity = "1";
            form.style.pointerEvents = "auto";
        });
        close.addEventListener("click", function(){
            form.style.top = "-600px";
            form.style.opacity = "0";
            form.style.pointerEvents = "none";
        });

    </script>

    <script>
    const imageUpload = document.querySelector("input[name='p_image']");
    const prevIcon = document.querySelector(".image_upload img");

    imageUpload.addEventListener('change', function(){
        const file = this.files[0];

        if(file){
          const reader = new FileReader();

          reader.onload = function(e){
            prevIcon.src = e.target.result;
            prevIcon.style.width = "190px";
            prevIcon.style.height = "190px";
            prevIcon.style.objectFit = "cover";
            prevIcon.style.borderRadius = "6px";

          }
          reader.readAsDataURL(file);
        }

    });
    </script>

</body>
</html>
