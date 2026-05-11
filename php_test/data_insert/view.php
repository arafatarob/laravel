<?php
      $myDB = new mysqli("localhost", "root", "", "pos_db");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>view users</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

    <?php
    $data = $myDB->query('SELECT * FROM register');
          while($user = $data->fetch_assoc()){

            $img_src = !empty($user['image']) ? "uploads/" . $user['image'] : "uploads/avatar.png";
     ?>
    <div class="min-h-screen bg-gray-100 p-8">
  <div class="max-w-4xl mx-auto">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold text-gray-800">User Profile</h2>
      <a href="index.php" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Add New User</a>
    </div>

    <!-- Profile Card -->



     <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden flex flex-col md:flex-row">

       <!-- Image Section -->
       <div class="md:w-1/3 bg-gray-50 flex items-center justify-center p-8 border-r border-gray-100">
         <!-- PHP variable diye image path ekhane boshbe -->
         <img src="<?php echo $img_src ?>" alt="Profile" class="w-40 h-40 rounded-full object-cover shadow-lg border-4 border-white">
       </div>

       <!-- Information Section -->
       <div class="md:w-2/3 p-8">
         <div class="flex justify-between items-start mb-4">
           <div>
             <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-bold uppercase rounded-full">
               <?php echo $user['role'] ?>
             </span>
             <h1 class="text-3xl font-bold text-gray-900 mt-2"><?php echo $user['name'] ?></h1>
             <p class="text-gray-500 font-medium">@<?php echo $user['username'] ?></p>
           </div>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
           <!-- Email -->
           <div class="flex items-center space-x-3">
             <div class="p-2 bg-blue-50 rounded-lg">
               <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
             </div>
             <div>
               <p class="text-xs text-gray-400 uppercase font-bold tracking-wider">Email Address</p>
               <p class="text-gray-700"><?php echo $user['email'] ?></p>
             </div>
           </div>

           <!-- Phone Number -->
           <div class="flex items-center space-x-3">
             <div class="p-2 bg-green-50 rounded-lg">
               <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
             </div>
             <div>
               <p class="text-xs text-gray-400 uppercase font-bold tracking-wider">Phone Number</p>
               <p class="text-gray-700"><?php echo $user['number'] ?></p>
             </div>
           </div>
         </div>

         <!-- Action Buttons -->
         <div class="mt-8 flex space-x-3">
           <button class="flex-1 bg-gray-900 text-white py-2 rounded-lg font-medium hover:bg-gray-800 transition">Edit Profile</button>
           <button class="px-4 py-2 border border-red-200 text-red-600 rounded-lg font-medium hover:bg-red-50 transition">Delete</button>
         </div>
       </div>

     </div>
     </div>



</div>
   <?php } ?>
  </body>
</html>
