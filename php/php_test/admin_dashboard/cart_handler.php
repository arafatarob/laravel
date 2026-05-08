<?php
session_start();
include('./common/db.php');

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'add') {
        $id = intval($_POST['id']);
        $name = $_POST['name'];
        $price = floatval($_POST['price']);
        $image = $_POST['image'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$id] = [
                'name' => $name,
                'price' => $price,
                'image' => $image,
                'quantity' => 1
            ];
        }
        echo count($_SESSION['cart']);
    }

    if ($_POST['action'] == 'remove') {
        $id = intval($_POST['id']);
        unset($_SESSION['cart'][$id]);
        header("Location: index.php");
    }

    if ($_POST['action'] == 'get_cart') {
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id => $item) {
                echo "<div class='flex items-center gap-4 border-b pb-2 mb-2'>
                        <img src='{$item['image']}' class='w-12 h-12 object-cover rounded'>
                        <div class='flex-1'>
                            <h4 class='text-sm font-bold'>{$item['name']}</h4>
                            <p class='text-xs text-gray-500'>\${$item['price']} x {$item['quantity']}</p>
                        </div>
                        <button onclick='removeFromCart($id)' class='text-red-500 text-xs'>Remove</button>
                    </div>";
            }
        } else {
            echo "<p class='text-gray-500 text-center'>Cart is empty</p>";
        }
    }
}
?>