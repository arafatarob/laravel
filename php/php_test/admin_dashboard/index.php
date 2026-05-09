<?php 
session_start();
include('./common/db.php'); 


?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont/tabler-icons.min.css">
    <style>
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            right: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.2);
        }
        .search_box {
    width: 300px;
    background: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
    height: 40px;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
}
        .search_box input {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    background: transparent;
    padding: 6px 10px;
    border: none;
    outline: none;
    color: #fff;
}
    </style>
</head>
<body class="bg-gray-50">
    <nav class=" p-5 shadow mb-10 flex justify-between items-center px-10" style="background: #1a1a2e;">
        <h1 class="text-xl font-bold text-white">Madhuri - Jannat - Store</h1>
        <form action="" method="get">
            <div class="search_box">
                <input type="text" name="search" placeholder="Search...." autocomplete="off">
            </div>
        </form>
        <div class="flex items-center">
            <button onclick="toggleCart()" class="relative p-2 rounded-full mr-4 hover:bg-gray-200" style="box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);">
                🛒 <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] px-1.5 rounded-full">
                    <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
                </span>
            </button>

            <div class="relative inline-block text-left">
                <button onclick="toggleUserDropdown()" class="flex items-center gap-2 p-1.5 pr-3 rounded-full hover:bg-gray-100 transition" style="background: #1a1a2e; color: #fff;box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); border: 0.5px solid rgba(255, 255, 255, 0.1);">
                    <img src="image/avatar.png" class="w-8 h-8 rounded-full border">
                    <span class="text-sm font-semibold hidden md:block">
                        <?php echo isset($_SESSION['user_id']) ? htmlspecialchars($_SESSION['user_name'] ?? 'Account') : 'Guest'; ?>
                    </span>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <!-- Dropdown menu -->
                <div id="user-dropdown" class="hidden absolute right-0 mt-3 w-64 rounded-xl shadow-2xl border z-50 overflow-hidden">
                    <div class="p-4 border-b"  style="background: #1a1a2e; color: #fff;">
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <p class="font-bold text-white"><?php echo htmlspecialchars($_SESSION['user_name'] ?? ''); ?></p>
                            <p class="text-xs text-white truncate"><?php echo htmlspecialchars($_SESSION['user_email'] ?? ''); ?></p>
                            <span class="text-[10px] mt-2 inline-block px-2 py-0.5 bg-blue-100 text-blue-700 rounded-full font-bold uppercase">
                                <?php echo htmlspecialchars($_SESSION['user_role'] ?? 'user'); ?>
                            </span>
                        <?php else: ?>
                            <p class="font-bold  text-white">Welcome, Guest</p>
                            <p class="text-xs  text-white">Log in to manage orders</p>
                        <?php endif; ?>
                    </div>
                    <div class="py-2 text-white" style="background: #1a1a2e;">
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="admin/user.php" class="block px-4 py-2 text-sm text-white-700 hover:bg-blue-50 hover:text-blue-600">📦 My Orders</a>
                            <?php if(($_SESSION['user_role'] ?? '') === 'admin'): ?>
                                <a href="admin/admin_dashboard.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">⚙️ Admin Dashboard</a>
                            <?php endif; ?>
                            <div class="border-t my-1"></div>
                            <a href="logout.php" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 font-bold">Logout</a>
                        <?php else: ?>
                            <a href="login.php" class="block px-4 py-2 text-sm text-blue-600 hover:bg-blue-50 font-semibold">Login</a>
                            <a href="signup.php" class="block px-4 py-2 text-sm text-green-600 hover:bg-green-50 font-semibold">Register</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-10" style="margin-top: 130px;">
        
        <?php
        $result = $conn->query("SELECT * FROM products");
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $sql = "SELECT * FROM products WHERE concat(name) LIKE '%$search%'";

                $result = mysqli_query($conn,$sql);
            }
        while($row = $result->fetch_assoc()):

            $img_src = !empty($row['image']) ? "./image/" . $row['image'] : "image/avatar.png";
        ?>
        <div class="bg-white p-5 rounded-lg shadow-md border hover:shadow-xl transition">
            
            <div class="h-60 mb-4 overflow-hidden rounded-lg bg-gray-100">
                <img src="<?php echo $img_src; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="w-full h-full object-cover">
            </div>
            <h3 class="text-lg font-semibold"><?php echo $row['name']; ?></h3>
            <p class="text-gray-500 text-sm my-2"><?php echo $row['description']; ?></p>
            <div class="flex flex-wrap justify-between items-center mt-4 gap-2">
                <span class="text-blue-600 font-bold">$<?php echo $row['price']; ?></span>
                <div class="flex gap-2">
                    <button onclick="addToCart(<?php echo $row['id']; ?>, '<?php echo addslashes($row['name']); ?>', <?php echo $row['price']; ?>, '<?php echo $img_src; ?>')" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Add to Cart</button>
                    <a href="product_view.php?product_id=<?php echo $row['id']; ?>" class="bg-gray-200 text-gray-800 px-3 py-1 rounded text-sm hover:bg-gray-300 transition">View</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <!-- Cart Sidebar -->
    <div id="cart-sidebar" class="fixed top-20 right-0 w-80 h-full bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-50 p-6 overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Your Cart</h2>
            <button onclick="toggleCart()" class="text-gray-500 text-2xl">&times;</button>
        </div>
        <div id="cart-items">
            <!-- Items will be loaded here via JS -->
        </div>
        <div class="mt-8 border-t pt-4">
            <a href="order_form.php" class="block w-full bg-green-600 text-white text-center py-3 rounded-lg font-bold hover:bg-green-700">Checkout Now</a>
        </div>
    </div>


    <?php include('common/home_footer.php') ?>

    <script>
        function toggleUserDropdown() {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown if clicked outside
        window.addEventListener('click', function(e) {
            const dropdown = document.getElementById('user-dropdown');
            if (dropdown && !e.target.closest('#user-dropdown') && !e.target.closest('button[onclick="toggleUserDropdown()"]')) {
                dropdown.classList.add('hidden');
            }
        });

        function toggleCart() {
            const sidebar = document.getElementById('cart-sidebar');
            sidebar.classList.toggle('translate-x-full');
            loadCart();
        }

        function addToCart(id, name, price, image) {
            const formData = new FormData();
            formData.append('action', 'add');
            formData.append('id', id);
            formData.append('name', name);
            formData.append('price', price);
            formData.append('image', image);

            fetch('cart_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.text())
            .then(count => {
                document.getElementById('cart-count').innerText = count;
                alert('Product added to cart!');
            });
        }

        function loadCart() {
            const formData = new FormData();
            formData.append('action', 'get_cart');

            fetch('cart_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.text())
            .then(html => {
                document.getElementById('cart-items').innerHTML = html;
            });
        }

        function removeFromCart(id) {
            const formData = new FormData();
            formData.append('action', 'remove');
            formData.append('id', id);

            fetch('cart_handler.php', {
                method: 'POST',
                body: formData
            }).then(() => {
                loadCart();
                // Update count (manual decrement for UI speed)
                const count = document.getElementById('cart-count');
                count.innerText = Math.max(0, parseInt(count.innerText) - 1);
            });
        }
    </script>
</body>
</html>
