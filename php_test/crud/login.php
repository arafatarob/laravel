<?php

session_start();
    require('common/connection.php');

    if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $insert = $connect->query("SELECT * FROM users where email='$email' ");

      $user = $insert->fetch_assoc();

      if($password == $user['password']){
        $_SESSION['name'] = $user['name'];
        $_SESSION['user_role'] = $user['role'];
        echo "Login successfully";
        header('Location: welcome.php');
      }else{
        echo "<script>alert('Invalid User and Password')</script>";
      }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
}

.registration-form {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: white;
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    letter-spacing: 1px;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 500;
}

.input-group input {
    width: 100%;
    padding: 12px 15px;
    border-radius: 8px;
    border: none;
    outline: none;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    font-size: 16px;
    transition: 0.3s;
}

.input-group input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.input-group input:focus {
    background: rgba(255, 255, 255, 0.3);
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
}

.submit-btn {
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    border: none;
    border-radius: 8px;
    background: #fff;
    color: #764ba2;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn:hover {
    background: #764ba2;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}
    </style>
</head>
<body>

    <div class="container">
        <form class="registration-form" method="post">
            <h2>login user</h2>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" required>
            </div>

            <button type="submit" name="login" class="submit-btn">login</button>
        </form>
    </div>

</body>
</html>
