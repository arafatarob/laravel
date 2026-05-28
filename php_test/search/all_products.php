<?php include('db.php') ?>



<?php
session_start();
    if(isset($_POST['add'])){
        $p_name = $_POST['p_name'];
        $p_description = $_POST['p_description'];
        $p_price = $_POST['p_price'];
        $p_stock = $_POST['p_stock'];
        $category = $_POST['category'];
        $image_p = $_FILES['p_image']['name'];
        $tmp_name = $_FILES['p_image']['tmp_name'];
        $img_src = "uploads/" . $image_p;

        $insert = $conn->query("INSERT INTO products(name, description, price, stock, image, category_id)
                    VALUES('$p_name', '$p_description', '$p_price', '$p_stock', '$image_p', '$category')
        ");

        if($insert){
            move_uploaded_file($tmp_name, $img_src);
            echo "Product Added";
            header('Location: index.php');
            exit;
        }else{
            echo "Failed to add product";
        }
    }

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

    <div class="total_product">
        <div>
            <?php
            $sql = $conn->query("SELECT *FROM products ");
            echo "Total Products: " . $sql->num_rows;
        ?>
        </div>
        <div>
          <?php if($role == 'admin'){ ?>
            <button class="btn">+ Add Product</button>
          <?php } ?>
        </div>
    </div>



    <div class="form">

        <form class="addForm" method="post" enctype="multipart/form-data">
            <div class="close">
                <img src="./icon/cross.png" alt="">
            </div>
        <div class="title">
            List Your Product
        </div>
            <div class="row">

                <input type="text" name="p_name" placeholder="Product Name">
                <input type="text" name="p_description" placeholder="Product Description">

            </div>

            <div class="row">

                <input type="text" name="p_price" placeholder="Product Price">
                <input type="text" name="p_stock" placeholder="Product Stock">
                <select name="category" id="category">
                    <option value="select">Select categories</option>

                        <?php
                            $cate = $conn->query("SELECT * FROM categories");


                            while($cate_items = $cate->fetch_assoc()){
                        ?>

                        <option value="<?php echo $cate_items['id'] ?>"><?php echo $cate_items['name'] ?></option>

                        <?php } ?>

                </select>

            </div>

            <div class="row" id="imageUpload">
                <input type="file" name="p_image" placeholder="Product Image">
                <div class="image_upload"><img src="./icon/upload.png" alt=""></div>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="add" name="add">Add Product</button>
            </div>
    </form>
    </div>

    <table>
        <tr>

            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Action</th>

        </tr>

        <?php
            $sql = $conn->query("SELECT * FROM products ORDER BY id DESC");

            if(isset($_GET['search'])){
                $search = $_GET['search'];

                $item = "SELECT * FROM products WHERE concat(name) LIKE '%$search%' ";

                $sql = mysqli_query($conn, $item);
            }

            $i = 1;

            while($items = $sql->fetch_assoc()){
                $img_src = !empty($items['image']) ? "uploads/" . $items['image'] : "uploads/avatar.png";

        ?>

        <tr>

            <td>#<?php echo "product_" . $i++ ?></td>
            <td><img src="<?php echo $img_src ?>" alt="<?php echo $items['name'] ?>"></td>
            <td><?php echo $items['name'] ?></td>
            <td><?php echo $items['description'] ?></td>
            <td><?php echo $items['price'] ?></td>
            <td><?php echo $items['stock'] ?></td>
            <td>
                <a href="view.php?id=<?php echo $items['id'] ?>">view</a>
                <?php if($role == 'admin'){ ?>
                    <a href="delete.php?id=<?php echo $items['id'] ?>">delete</a>
                <?php } ?>
            </td>

        </tr>

        <?php } ?>

    </table>


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
