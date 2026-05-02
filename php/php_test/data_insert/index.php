<?php
    $myDB = new mysqli("localhost", "root", "", "pos_db");

    if(!empty($_POST)){
      $user_name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $role = $_POST['role'];

      $insert = "INSERT INTO register(name, email, number, username, password, role)
                              VALUES('$user_name', '$email', '$number', '$username', '$password', '$role')";

      if(mysqli_query($myDB, $insert)){
        echo "Data Registration Successfully";
        header("location: view.php");
      }else{
        echo "Data not registered";
      }
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data insert</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md">
  <h2 class="text-2xl font-bold mb-6 text-gray-800">Registration Form</h2>

  <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">

    <!-- Name -->
    <div>
      <label class="block text-sm font-medium text-gray-700">Full Name</label>
      <input type="text" name="name" placeholder="Enter your name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm" required>
    </div>

    <!-- Email -->
    <div>
      <label class="block text-sm font-medium text-gray-700">Email Address</label>
      <input type="email" name="email" placeholder="example@mail.com" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm" required>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Phone Number -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
        <input type="tel" name="number" placeholder="017XXXXXXXX" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm">
      </div>

      <!-- Username -->
      <div>
        <label class="block text-sm font-medium text-gray-700">Username</label>
        <input type="text" name="username" placeholder="username123" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm" required>
      </div>
    </div>

    <!-- Password -->
    <div>
      <label class="block text-sm font-medium text-gray-700">Password</label>
      <input type="password" name="password" placeholder="••••••••" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm" required>
    </div>

    <!-- Role Selection -->
    <div>
      <label class="block text-sm font-medium text-gray-700">Select Role</label>
      <select name="role" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 shadow-sm bg-white">
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
      </select>
    </div>

    <!-- Profile Image -->
    <div>
      <label class="block text-sm font-medium text-gray-700">Profile Image</label>
      <input type="file" name="image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
    </div>

    <!-- Submit Button -->
    <div class="pt-4">
      <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300 font-semibold shadow-lg">
        Submit Information
      </button>
    </div>

  </form>
</div>

  </body>
</html>
