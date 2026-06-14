<?php

$conn = new mysqli('localhost', 'root', '', 'post');

include('./common/header.php');
include('./common/sidebar.php');
$users = null;
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $select = $conn->query("SELECT * FROM products WHERE id = '$id'");
  $item = $select->fetch_assoc();

  $img_src = !empty($item['image']) ? '../img/' . $item['image'] : '../img/avatar.png';
}

?>


<main>
  <div class="user_view">
    <div class="container">
      <form method="post">
        <a href="product.php"><span class="material-symbols-outlined">arrow_back_ios_new</span></a>
      </form>
      <div class="card">
        <h3>product's Details</h3>
        <?php if($item){ ?>
          <div class="card_inner">
            <div class="card_d card_item">
              <span>product name : <?php echo $item['name'] ?></span>
            </div>
            <div class=" card_item">
              <span><?php echo 'Product Description : ' . $item['description'] ?></span>
            </div>
            <div class="card_d card_item">
              <span><?php echo 'price : ' . $item['price'] . " ৳" ?></span>
              <span><?php echo 'stock : ' . $item['stock'] ?></span>
            </div>

            <div class=" card_item">
              <span>
                <img src="<?php echo $img_src ?>" alt="">
              </span>
            </div>
          </div>
        <?php } else { ?>
          <?php echo 'products not found' ?>
        <?php } ?>
      </div>
    </div>
  </div>
</main>
