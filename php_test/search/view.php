<?php
session_start();
    include('db.php');

    $id = $_GET['id'];

    $sql = $conn->query("SELECT * FROM products WHERE id = '$id'");
    $pro = $conn->query("SELECT * FROM categories");

    $items = $sql->fetch_assoc();
    $cate_item = $pro->fetch_assoc();

    $img_src = !empty($items['image']) ? "uploads/" . $items['image'] : "uploads/avatar.png";


    if(!isset($_SESSION['user_id'])){
      header("Location: ./auth/auth.php");
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
    <title><?php echo $items['name'] ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center
    }
    .card {
    width: 425px;
    height: auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    padding: 35px 40px;
    border-radius: 10px;
}
.card-image {
    width: 350px;
    height: 300px;
}
    </style>
</head>
<body>

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
    <!-- <div class="search_">
        <div class="icon">
            🔎
        </div>
    </div> -->
    <div class="boxRight">
      <div class="email">
        <?php echo "EMAIL: " . $email ?>
      </div>
      <div class="logout">
          <a href="logout.php">logout</a>
      </div>
    </div>
</header>

    <div class="card">
        <div class="card-image">
            <img src="<?php echo $img_src ?>" alt="">
        </div>
        <div class="card-title">
            <?php echo $items['name'] ?>
        </div>
        <div class="card-content">
            <?php echo $items['description'] ?>
        </div>

        <div class="card-price">
            <div>
                <?php echo "Price: " . "$" . $items['price'] ?>
            </div>
            <div>
                <?php echo "Stock: " . $items['stock'] . "/" . $cate_item['slug'] ?>
            </div>
        </div>
        <div class="card_btn">
          <div class="addPro">
            <?php if($role == 'admin'){ ?>
                <a href="edit.php?id=<?php echo $items['id'] ?>">edit</a>
            <?php } ?>
          </div>
          <div class="">
            <a href="index.php">+ Add Product</a>
          </div>
        </div>
    </div>


    <div class="form">

        <form class="addForm" action="edit.php?id=<?php echo $items['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="close">
                <img src="./icon/cross.png" alt="">
            </div>
        <div class="title">
            List Your Product
        </div>
            <div class="row">

                <input type="text" name="p_name" placeholder="Product Name" value="<?php echo $items['name'] ?>">
                <input type="text" name="p_description" placeholder="Product Description" value="<?php echo $items['description'] ?>">

            </div>

            <div class="row">

                <input type="text" name="p_price" placeholder="Product Price" value="<?php echo $items['price'] ?>">
                <input type="text" name="p_stock" placeholder="Product Stock" value="<?php echo $items['stock'] ?>">
                <select name="category" id="category">
                    <option value="select">Select categories</option>

                        <?php
                            $cate = $conn->query("SELECT * FROM categories");


                            while($cate_items = $cate->fetch_assoc()){

                              $selected = ($cate_items['id'] == $items['category_id']) ? 'selected' : '';
                        ?>

                        <option value="<?php echo $cate_items['id'] ?>" <?php echo $selected ?>><?php echo $cate_items['name'] ?></option>

                        <?php } ?>

                </select>

            </div>

            <div class="row" id="imageUpload">
                <input type="file" name="p_image" placeholder="Product Image">
                <div class="image_upload">
                  <img src="<?php echo $img_src ?>" alt="" value="<?php echo $items['name'] ?>">
                </div>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="edit_products" name="edit_products">Update Product</button>
            </div>
    </form>
    </div>
    <script>


        const form = document.querySelector(".form");
        const card_btn = document.querySelector(".card_btn a");
        const addPro = document.querySelector(".addPro a");
        const close = document.querySelector(".close");

        addPro.addEventListener("click", function(e){
          e.preventDefault();
        });
        card_btn.addEventListener("click", function(){
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
