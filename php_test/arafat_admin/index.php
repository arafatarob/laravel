<?php
    require('function/db.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

      <header>
          <h1>Arafat - Store</h1>
      </header>

      <main>
        <div class="products">


              <?php

              $data = $myDB->query('SELECT * FROM products');

              while($items = $data->fetch_assoc()){
              $img_src = !empty($items['image']) ? "./image/" . $items['image'] : "image/avatar.png";
                ?>

                <div class="product_card">
            <div class="image_box">
              <img src=" <?php echo  $img_src ?>" alt="">
            </div>
            <div class="product_price">
              <div class="price">
                <?php echo "$ ". $items['price'] ?>
              </div>
              <div class="strock">
                  <?php echo $items['stock'] ?>
              </div>
            </div>
            <div class="product_title">
              <?php echo $items['name'] ?>
            </div>
            <div class="product_description">
              <?php echo $items['description'] ?>
            </div>
            <div class="product_button">
              <a href="order_form.php?product_id=<?php echo $items['id'] ?>">buy now</a>
            </div>
        </div>

              <?php } ?>


        </div>
      </main>

  </body>
</html>
