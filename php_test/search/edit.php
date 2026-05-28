<?php
    include('db.php');

    $id = $_GET['id'];

    if (isset($_POST['edit_products'])) {
      $p_name = $_POST['p_name'];
      $p_description = $_POST['p_description'];
      $p_price = $_POST['p_price'];
      $p_stock = $_POST['p_stock'];
      $category = $_POST['category'];
      $image_p = $_FILES['p_image']['name'];
      $tmp_name = $_FILES['p_image']['tmp_name'];
      $img_src = "uploads/" . $image_p;


      $update = $conn->query("UPDATE products SET
        name='$p_name', description='$p_description', price='$p_price', stock='$p_stock', image='$image_p', category_id='$category' WHERE id='$id' ");

        if($update){
          echo "product updated";
          header("Location: view.php?id=". $id);
          exit();
        }
    }




?>
