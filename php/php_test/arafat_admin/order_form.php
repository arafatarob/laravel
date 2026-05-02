<?php
    require('function/db.php');

  if(!isset($_GET['product_id'])){
    header("Location: index.php");
    exit();
  }

  $product_id = $_GET['product_id'];

  $data = $myDB->query("SELECT * FROM products WHERE id=$product_id");

  $product = $data->fetch_assoc();

  $user_id = 2;


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
      <div class="order_box">
        <h2>checkout details</h2>
        <hr>

            <div class="info">
              <h3>product info</h3>

              <div class="product_title">
                <?php echo $product['name'] ?>
              </div>
              <div class="product_price">
                <div class="price">
                  <?php echo "Total : " . "$" . $product['price'] ?>
                </div>
              </div>
            </div>


      <form class="order_form" action="view.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">

          <input type="number" class="form-control" name="number" value="" placeholder="Enter your Number">

          <textarea name="address" rows="6" cols="40" placeholder="House no, Road, Area..."></textarea>

          <div class="button_box">
            <input type="submit" class="order_btn" name="confirm_order" value="confirm order">
          </div>
      </form>

      </div>
    </main>

   </body>
 </html>
