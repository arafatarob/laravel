<?php
session_start();
// ডাটাবেজ কানেকশন
$conn = new mysqli("localhost", "root", "", "pos_db");

// কার্ট ক্লিয়ার করার লজিক
if (isset($_GET['clear'])) {
    unset($_SESSION['cart']);
    header("Location: index.php");
    exit();
}

// ১. কার্টে প্রোডাক্ট যোগ করার লজিক (সব ইনফো সহ)
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $res = $conn->query("SELECT * FROM products WHERE id = $id");

    if ($res->num_rows > 0) {
        $p = $res->fetch_assoc();

        // যদি কার্টে আগে থেকেই থাকে তবে কোয়ান্টিটি বাড়বে, না থাকলে নতুন অ্যাড হবে
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id] = [
                'id' => $p['id'],
                'name' => $p['name'],
                'price' => $p['price'],
                'quantity' => 1
            ];
        }
    }
    header("Location: index.php");
    exit();
}

// ২. চেকআউট লজিক (ডাইনামিক পেমেন্ট)
if (isset($_POST['checkout']) && !empty($_SESSION['cart'])) {
    $customer_id = 1; // ডিফল্ট কাস্টমার
    $total_bill = $_POST['total_bill'];

    // অর্ডার সেভ করা
    $stmt = $conn->prepare("INSERT INTO orders (customer_id, total_amount) VALUES (?, ?)");
    $stmt->bind_param("id", $customer_id, $total_bill);

    if ($stmt->execute()) {
        $order_id = $conn->insert_id;

        foreach ($_SESSION['cart'] as $item) {
            $p_id = $item['id'];
            $qty = $item['quantity'];
            $price = $item['price'];

            // অর্ডার আইটেম সেভ
            $conn->query("INSERT INTO order_items (order_id, product_id, quantity, unit_price) VALUES ('$order_id', '$p_id', '$qty', '$price')");

            // স্টক কমানো
            $conn->query("UPDATE products SET stock = stock - $qty WHERE id = $p_id");
        }
        unset($_SESSION['cart']);
        $success = "অর্ডার সফলভাবে সম্পন্ন হয়েছে!";
    }
}
?>



<div class="products grid grid-cols-3 gap-4"> <!-- গ্রিড লুকের জন্য Tailwind ক্লাস দিতে পারেন -->
    <?php
    // ডাটাবেজ থেকে ডাটা আনা
    $res = $conn->query("SELECT * FROM pro_tab");

    // লুপ শুরু
    while($row = $res->fetch_assoc()) {
        // ইমেজ পাথ চেক
        $img_src = !empty($row['image']) ? "uploads/" . $row['image'] : "uploads/default.png";
        ?>

        <!-- লুপের ভেতরের HTML অংশ -->
        <div class="product-card bg-white p-4 shadow rounded-lg text-center">
            <img src="<?php echo $img_src; ?>" alt="<?php echo $row['name']; ?>" class="mx-auto mb-2" style="width:100px; height:100px; object-fit: cover;">
            <h3 class="font-bold text-gray-800"><?php echo $row['name']; ?></h3>
            <p class="text-blue-600">Price: ৳<?php echo number_format($row['price']); ?></p>

            <!-- অ্যাড টু কার্ট বাটন (আগের লজিক অনুযায়ী) -->
            <a href="?add=<?php echo $row['id']; ?>" class="mt-2 inline-block bg-blue-500 text-white px-4 py-1 rounded text-sm">Add to Bill</a>
        </div>

    <?php
    } // লুপ শেষ
    ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Professional PHP POS</title>
</head>
<body class="bg-gray-50">

    <div class="flex h-screen overflow-hidden">

        <!-- বাম পাশে: প্রোডাক্ট মেনু -->
        <div class="w-2/3 p-6 overflow-y-auto">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Products Menu</h1>

            <?php if(isset($success)) echo "<div class='bg-green-500 text-white p-4 rounded-lg mb-4 shadow'>$success</div>"; ?>

            <div class="grid grid-cols-3 gap-6">
                <?php
                $products = $conn->query("SELECT * FROM products WHERE stock > 0");
                while($row = $products->fetch_assoc()):
                ?>
                <div class="bg-white p-4 rounded-xl shadow-sm border hover:border-blue-500 transition-all flex flex-col justify-between">
                    <div>
                        <img src="https://via.placeholder.com/150" class="w-full h-32 object-cover rounded-md mb-3">
                        <h3 class="font-bold text-gray-700"><?php echo $row['name']; ?></h3>
                        <p class="text-xs text-gray-400">SKU: <?php echo $row['id']; ?></p>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-blue-600 font-bold text-lg">৳<?php echo number_format($row['price']); ?></span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">Stock: <?php echo $row['stock']; ?></span>
                        </div>
                        <a href="?add=<?php echo $row['id']; ?>" class="block text-center bg-blue-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-blue-700 active:scale-95 transition">Add to Bill</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- ডান পাশে: বিলিং কার্ট -->
        <div class="w-1/3 bg-white border-l shadow-2xl flex flex-col p-6">
            <h2 class="text-xl font-bold mb-4 border-b pb-2 text-blue-600 italic">Current Order</h2>

            <div class="flex-grow overflow-y-auto pr-2">
                <?php
                $grand_total = 0;
                if(!empty($_SESSION['cart'])):
                    foreach($_SESSION['cart'] as $item):
                        $subtotal = $item['price'] * $item['quantity'];
                        $grand_total += $subtotal;
                ?>
                <div class="flex justify-between items-center mb-3 p-3 bg-gray-50 rounded-lg border border-gray-100">
                    <div>
                        <p class="font-bold text-gray-800"><?php echo $item['name']; ?></p>
                        <p class="text-xs text-gray-500">৳<?php echo number_format($item['price']); ?> x <?php echo $item['quantity']; ?></p>
                    </div>
                    <span class="font-bold text-blue-600">৳<?php echo number_format($subtotal); ?></span>
                </div>
                <?php endforeach; else: ?>
                    <div class="text-center py-20 text-gray-400">
                        <p class="text-lg">কার্ট খালি</p>
                        <p class="text-sm">পণ্য যোগ করতে বাম পাশ থেকে সিলেক্ট করুন</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- হিসাব এবং পেমেন্ট বাটন -->
            <div class="border-t pt-4">
                <div class="space-y-2 mb-4">
                    <div class="flex justify-between text-gray-600">
                        <span>Subtotal:</span>
                        <span>৳<?php echo number_format($grand_total); ?></span>
                    </div>
                    <div class="flex justify-between text-xl font-black text-gray-900 pt-2 border-t">
                        <span>Grand Total:</span>
                        <span class="text-green-600">৳<?php echo number_format($grand_total); ?></span>
                    </div>
                </div>

                <form method="POST">
                    <!-- এই হিপেন ইনপুটটি গ্র্যান্ড টোটাল ডাটাবেজে পাঠায় -->
                    <input type="hidden" name="total_bill" value="<?php echo $grand_total; ?>">

                    <button name="checkout" type="submit" <?php echo ($grand_total == 0) ? 'disabled' : ''; ?> class="w-full bg-green-600 text-white py-4 rounded-xl font-bold shadow-lg hover:bg-green-700 transition active:scale-95 disabled:bg-gray-300">
                        CONFIRM PAYMENT (৳<?php echo number_format($grand_total); ?>)
                    </button>

                    <?php if($grand_total > 0): ?>
                        <a href="?clear=1" class="block text-center text-red-500 mt-4 text-sm hover:underline font-medium">Clear Cart</a>
                    <?php endif; ?>
                </form>
            </div>
        </div>

    </div>

</body>
</html>
