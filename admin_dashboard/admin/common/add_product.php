
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/dashboard.css">

</head>
<body class="bg-gray-100 p-10">
    <div class="main-content">
     <section class="adminHome">
    <div class="max-w-4xl mx-auto p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-5">Admin Panel - Add Product</h2>

        <!-- Add Product Form -->
        <form action="common/process.php" method="POST" enctype="multipart/form-data" class="grid grid-cols-2 gap-4">
            <input type="text" name="name" placeholder="Product Name" class="border p-2 rounded" required>
            <input type="number" name="price" placeholder="Price" class="border p-2 rounded" required>
            <input type="number" name="stock" placeholder="Stock" class="border p-2 rounded" required min="0">
            <select name="category_id" class="border p-2 rounded" required>
                <option value="">Select Category</option> 

                <?php
                 $category = $conn->query("SELECT * FROM categories");
                 if($category->num_rows > 0):
                 while($cat = $category->fetch_assoc()):
                 ?>
                 <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                 <?php endwhile; endif; ?>

            </select>
            <input type="file" name="image" accept="image/*" class="border p-2 rounded col-span-2" required>
            <textarea name="description" placeholder="Description" class="border p-2 rounded col-span-2"></textarea>
            <button type="submit" name="add_product" class="bg-blue-500 text-white p-2 rounded col-span-2">Add Product</button>
        </form>

        <hr class="my-10">

        <!-- Product List -->
        <h2 class="text-2xl font-bold mb-5">Manage Products</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Price</th>
                    <th class="p-2 border">Stock</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM products");
                while($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td class="p-2 border"><?php echo $row['name']; ?></td>
                    <td class="p-2 border">$<?php echo $row['price']; ?></td>
                    <td class="p-2 border"><?php echo intval($row['stock']); ?></td>
                    <td class="p-2 border">
                        <a href="common/process.php?delete=<?php echo $row['id']; ?>" class="text-red-500">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    


    
        </section>
   </div>
</body>
</html>
