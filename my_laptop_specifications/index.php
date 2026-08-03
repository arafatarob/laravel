<?php
  include("./config/db.php");
  $select = $conn->query("SELECT * FROM laptop_specifications");

  $product = $select->fetch_assoc();
  $stock = $conn->query("SELECT COUNT(id) AS stk FROM laptop_specifications");

  $quentity = $stock->fetch_assoc();

  $keyboard = !empty($product['keyboard_img']) ? "./img/" . $product['keyboard_img'] : "./img/front.webp";
  $front = !empty($product['front_view_img']) ? "./img/" . $product['front_view_img'] : "./img/front.webp";
  $side = !empty($product['side_ports_img']) ? "./img/" . $product['side_ports_img'] : "./img/front.webp";
  $open = !empty($product['open_angle_img']) ? "./img/" . $product['open_angle_img'] : "./img/front.webp";
  $close = !empty($product['closed_lid_img']) ? "./img/" . $product['closed_lid_img'] : "./img/front.webp";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['model'] ?></title>
    <meta name="description" content="<?php echo $product['processor'] ?>">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

    <header>
      <div class="marque_container">
        <marquee>
          <div class="contact">
              <span></span>
              <h3>Develope By MD ARAFAT HOSSAIN</h3>
              <span></span>
              <h3>Develope By MD ARAFAT HOSSAIN</h3>
              <span></span>
              <h3>Develope By MD ARAFAT HOSSAIN</h3>
              <span></span>
              <h3>Develope By MD ARAFAT HOSSAIN</h3>
              <span></span>
              <h3>Develope By MD ARAFAT HOSSAIN</h3>
              <span></span>
              <h3>Develope By MD ARAFAT HOSSAIN</h3>
              <span></span>
          </div>
      </marquee>
      </div>
    </header>

    <section class="pdp">
      <div class="wrap pdp-grid">

        <!-- ============ GALLERY ============ -->
        <div class="gallery-col">
          <div class="main-image">
            <span class="badge-new">New arrival</span>
            <!-- MAIN PHOTO (Default Front View) -->
            <img id="mainImg" src="<?php echo $front; ?>" alt="<?php echo $product['model']; ?> front view">
          </div>

          <div class="thumb-row">
            <!-- 1. Front View -->
            <div class="thumb active" data-full="<?php echo $front; ?>">
              <img src="<?php echo $front; ?>" alt="Front view thumbnail">
            </div>

            <!-- 2. Side Ports -->
            <div class="thumb" data-full="<?php echo $side; ?>">
              <img src="<?php echo $side; ?>" alt="Side ports thumbnail">
            </div>

            <!-- 3. Keyboard -->
            <div class="thumb" data-full="<?php echo $keyboard; ?>">
              <img src="<?php echo $keyboard; ?>" alt="Keyboard thumbnail">
            </div>

            <!-- 4. Open Angle -->
            <div class="thumb" data-full="<?php echo $open; ?>">
              <img src="<?php echo $open; ?>" alt="Open angle thumbnail">
            </div>

            <!-- 5. Closed Lid -->
            <div class="thumb" data-full="<?php echo $close; ?>">
              <img src="<?php echo $close; ?>" alt="Closed lid thumbnail">
            </div>
          </div>
        </div>

  <!-- ============ BUY BOX ============ -->
  <div class="buy-col">
    <div class="cat-tag"><?php echo $product['model'] ?></div>
    <h1><?php echo $product['processor'] . " - (USED)" ?></h1>
    <p class="subtitle">15.6″ FHD LED · 2-core processor · AMD Radeon Graphics</p>

    <div class="rating-row">
      <span class="stars">★★★★★</span>
      <span class="count">4.8 out of 5 - <a href="#reviews-panel">3 reviews</a></span>
    </div>

    <div class="price-block">
      <span class="now mono" id="priceNow">৳28,000</span>
      <br>
      <span class="was">৳41,000</span>
    </div>
  </div>
</div>
</section>

<!-- ============ TABS: Description / Specs / Reviews ============ -->
<section class="tabs-section">
<div class="wrap">
  <div class="tab-nav">
    <button class="tab-btn active" data-tab="desc">Description</button>
    <button class="tab-btn" data-tab="specs">Specifications</button>
    <button class="tab-btn" data-tab="reviews">Reviews (3)</button>
  </div>

  <div class="tab-panel active" id="tab-desc">
    <div class="desc-grid">
      <div>
        <p>This budget-friendly laptop is powered by an AMD Ryzen 3 3250U processor, operating at a base frequency of 2.60 GHz (with a turbo boost up to 3.50 GHz). It features 2 cores and 4 threads, delivering dependable performance for daily tasks, student workloads, and office productivity. The processing power is complemented by integrated AMD Radeon Vega 3 Graphics, ensuring smooth visuals for video streaming, casual gaming, and media consumption. The device features a vibrant Full HD (or HD) Anti-Glare LED display, typically available in a portable 14-inch or 15.6-inch form factor that minimizes eye strain during extended work hours. For memory and storage, it supports efficient DDR4 RAM alongside high-speed NVMe M.2 SSD storage, providing rapid boot times and quick application loading. It comes fully equipped with modern connectivity options, including fast Wi-Fi, Bluetooth, USB Type-C, USB 3.2, and an HDMI port for seamless external display connections. Wrapped in a slim, lightweight, and modern chassis, this laptop is backed by a reliable multi-cell battery with fast-charging support, making it an excellent, well-rounded choice for everyday computing under Windows 10 or Windows 11.</p>
      </div>
      <div class="desc-img">
        <!-- REPLACE: lifestyle/in-use photo -->
        <img src="<?php echo $keyboard ?>" alt="<?= $product['processor'] ?>">
      </div>
    </div>
  </div>

  <div class="tab-panel" id="tab-specs">
    <table class="spec-table">
      <tr><td>Processor</td><td><?= $product['processor'] ?></td></tr>
      <tr><td>Memory</td><td><?= $product['memory_ram'] ?></td></tr>
      <tr><td>Graphics</td><td><?= $product['graphics'] ?></td></tr>
      <tr><td>Storage</td><td><?= $product['storage'] ?></td></tr>
      <tr><td>Display</td><td><?= $product['display'] ?></td></tr>
      <tr><td>Battery</td><td><?= $product['battery'] ?></td></tr>
      <tr><td>Ports</td><td><?= $product['ports_interface'] ?></td></tr>
      <tr><td>Weight</td><td><?= $product['weight'] ?></td></tr>
      <tr><td>Dimensions</td><td><?= $product['dimensions'] ?></td></tr>
      <tr><td>Operating System</td><td><?= $product['os_support'] ?></td></tr>
    </table>
  </div>

  <div class="tab-panel" id="tab-reviews">
    <div class="review-summary" id="reviews-panel">
      <div class="review-score">
        <div class="num">4.8</div>
        <div class="stars">★★★★★</div>
        <div class="sub">3 ratings</div>
      </div>
      <div>
        <div class="bar-row"><span>5★</span><div class="bar"><span style="width:82%"></span></div><span>82%</span></div>
        <div class="bar-row"><span>4★</span><div class="bar"><span style="width:12%"></span></div><span>12%</span></div>
        <div class="bar-row"><span>3★</span><div class="bar"><span style="width:4%"></span></div><span>4%</span></div>
        <div class="bar-row"><span>2★</span><div class="bar"><span style="width:1%"></span></div><span>1%</span></div>
        <div class="bar-row"><span>1★</span><div class="bar"><span style="width:1%"></span></div><span>1%</span></div>
      </div>
    </div>

    <div class="review-item">
      <div class="top"><span class="name">Rafiul Ahmed <span class="verified">Verified</span></span><span class="date">2 weeks ago</span></div>
      <div class="stars">★★★★★</div>
      <p>Switched from a much heavier machine and haven't looked back. Render times on my timeline dropped noticeably, and the display is genuinely accurate for grading work.</p>
    </div>
    <div class="review-item">
      <div class="top"><span class="name">Nusrat Sultana <span class="verified">Verified</span></span><span class="date">1 month ago</span></div>
      <div class="stars">★★★★★</div>
      <p>The screen alone justified the price for me. Calibration out of the box was spot on for print work, no extra profiling needed.</p>
    </div>
    <div class="review-item">
      <div class="top"><span class="name">Tanvir Hasan <span class="verified">Verified</span></span><span class="date">1 month ago</span></div>
      <div class="stars">★★★★☆</div>
      <p>Compiles our monorepo faster than my old desktop tower. Fan noise is basically non-existent during normal work, only kicks in under sustained load.</p>
    </div>
  </div>
</div>
</section>

  <script src="./js/script.js" charset="utf-8"></script>
  </body>
</html>
