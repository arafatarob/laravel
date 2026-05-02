<?php

  $myDB = new mysqli('localhost', 'root', '', 'pos_db');

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>product</title>

    <style media="screen">

    .products {
  display: flex;
  justify-content: space-between;
  box-shadow: 0 0 10px
#ccc;
  padding: 50px;
  border-radius: 10px;
  border: 1px solid #fff;
  background: rgba(0, 0, 0, 0.2);
}

.pro {
  width: 15%;
    box-shadow: 0 0 10px #ccc;
    padding: 10px;
    border-radius: 10px;
    border: 1px solid #fff;
    background: rgba(0, 0, 0, 0.2);
}
    </style>
  </head>
  <body>

   <div class="products">
     <?php
     $product = $myDB->query("SELECT * FROM php_product");

       while($item = $product->fetch_assoc()) {

         $img_src = !empty($item['image']) ? "uploads/" . $item['image'] : "uploads/product.png";

      ?>

      <div class="pro">
        product name : <?php echo $item['name'] . " <br>" ?>

        product price : <?php echo number_format($item['price']) . "<br>" ?>

         product SKU : <?php echo ($item['sku']) . "<br><br>" ?>

         <img src="<?php echo $img_src ?>" alt="<?php echo $item['name']?>" style="width: 100px; height: 100px;">
      </div>

    <?php } ?>
   </div>

  </body>
</html>
