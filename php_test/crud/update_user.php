<?php

    require('common/connection.php');

    if(isset($_POST['update_data'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $role = $_POST['role'];
        $password = $_POST['password'];



        $id = $_GET['id'];

        $update = $connect->query("UPDATE users SET name='$name', email='$email', number='$number', role='$role', password='$password' WHERE id = '$id' ");

        if($update){
            echo "<script> alert('update successfully') </script>";
            header('Location: oneView.php');
        }else{
            die("connection errro" . $connect->connect_error);
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

<?php

    $id = $_GET['id'];
    $sql = $connect->query("SELECT * FROM users WHERE id = '$id'");

    $user = $sql->fetch_assoc();




?>

    <div class="container">
        <form class="registration-form" method="post">
            <h2>Update Users</h2>

            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" required value="<?php echo $user['name'] ?>">
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required value="<?php echo $user['email'] ?>">
            </div>

            <div class="input-group">
                <label for="number">Phone Number</label>
                <input type="tel" name="number" id="number" placeholder="017xxxxxxxx" required value="<?php echo $user['number'] ?>">
            </div>

            <div class="input-group">
                <label for="role">Role</label>
                <select class="" value="<?php echo $user['role'] ?>" name="role">
                  <option value="Select"<?php echo ($user['role'] == 'select') ? 'Selected' : ''; ?>>Select</option>
                  <option value="Admin"<?php echo ($user['role'] == 'Admin') ? 'selected' : '' ?>>Admin</option>
                  <option value="HR"<?php echo ($user['role'] == 'HR') ? 'selected' : '' ?>>HR</option>
                  <option value="Manager"<?php echo ($user['role'] == 'Manager') ? 'selected' : '' ?>>Manager</option>
                </select>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" placeholder="••••••••" required value="<?php echo $user['password'] ?>">
            </div>

            <button type="submit" name="update_data" class="submit-btn">Update</button>
        </form>
    </div>

</body>
</html>
