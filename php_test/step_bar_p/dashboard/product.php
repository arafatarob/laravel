
<?php

  include('./common/header.php');
  include('./common/sidebar.php');


?>
<main>
  <div class="top">
    <div class="title">
      product's
    </div>
    <div class="add">
      <a href="#">add product's</a>
    </div>
  </div>
  <table>
    <tr>
      <th>images</th>

      <th>name</th>

      <th>description</th>

      <th>price</th>

      <th>stock</th>

      <th>action</th>


    </tr>
    <?php
      $select = $conn->query("SELECT * FROM products");
      while($item = $select->fetch_assoc()):

        $img_src = !empty($item['image']) ? '../img/' . $item['image'] : '../img/avatar.png';
    ?>
    <tr>

      <td><img src="<?php echo $img_src; ?>" alt="<?php echo $item['name'] ?>"></td>
      <td><?= $item['name'] ?></td>
      <td><?= $item['description'] ?></td>
      <td><?= $item['price'] ?></td>
      <td><?= $item['stock'] ?></td>
      <td>
        <a href="product_view.php?id=<?php echo $item['id'] ?>">view</a>
        <a href="#">edit</a>
        <a href="#">delete</a>
      </td>

    </tr>

  <?php endwhile; ?>

  </table>
</main>
