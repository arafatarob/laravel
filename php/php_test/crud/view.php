<?php

    require('common/connection.php');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #0f172a; /* Dark Background */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.card-wrapper {
    padding: 20px;
}

.user-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(15px);
    width: 450px;
    padding: 30px;
    border-radius: 25px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: white;
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    text-align: center;
    transition: 0.4s;
}

.user-card:hover {
    transform: translateY(-10px);
    border: 1px solid rgba(0, 210, 255, 0.5);
    box-shadow: 0 0 20px rgba(0, 210, 255, 0.2);
}

.profile-img i {
    font-size: 80px;
    color: #00d2ff;
    margin-bottom: 15px;
    text-shadow: 0 0 15px rgba(0, 210, 255, 0.5);
}

h3 {
    font-size: 24px;
    margin-bottom: 5px;
}

.role {
    font-size: 14px;
    color: #94a3b8;
    margin-bottom: 25px;
    letter-spacing: 1px;
}

.card-body {
    text-align: left;
    margin-bottom: 30px;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    font-size: 15px;
}

.info-item i {
    width: 30px;
    color: #00d2ff;
    font-size: 18px;
}

.info-item strong {
    color: #cbd5e1;
    margin-right: 5px;
}

.card-footer {
    display: flex;
    gap: 10px;
}

.btn {
    flex: 1;
    padding: 10px;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.edit-btn {
    background: #00d2ff;
    color: #0f172a;
}

.delete-btn {
    background: rgba(255, 77, 77, 0.2);
    color: #ff4d4d;
    border: 1px solid #ff4d4d;
}

.btn:hover {
    opacity: 0.8;
    transform: scale(1.05);
}

/* Container styling jate upore ektu space thake */
.add_user {
    margin-bottom: 20px;
    display: flex;
    justify-content: flex-end; /* Button-ti dane rakhar jonno */
}

/* Add New User Button Styling */
.add_user a {
    text-decoration: none;
    background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
    color: white;
    padding: 12px 25px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 15px;
    box-shadow: 0 4px 15px rgba(0, 210, 255, 0.3);
    transition: all 0.3s ease;
    display: inline-block;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.add_user a:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 210, 255, 0.5);
    background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
}

/* Heading Styling */
h2 {
    color: #fff;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 10px;
}

/* Heading-er niche ekti chotto line (Optional decoration) */
h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: #00d2ff;
    border-radius: 2px;
}
a{
    text-decoration: none;
}
    </style>
</head>

<body>



    <div class="table-container">


        <div class="card-wrapper">
            <div class="add_user">
              <div class="add">
                <a href="insert.php" class="add-btn">+ Add New User</a>
                <a href="login.php" class="add-btn">+ Login</a>
              </div>
        </div>
        <h2>View Users</h2>
        <?php

        $id = $_GET['id'];


            $select = $connect->query("SELECT * FROM users WHERE id = '$id' ");

            while($user = $select->fetch_assoc()):
        ?>
    <div class="user-card">
        <div class="card-header">
            <div class="profile-img">
                <i class="fas fa-user-circle"></i>
            </div>
            <h3><?php echo $user['name'] ?></h3>

            <p><?php echo $user['role'] ?></p>
        </div>

        <div class="card-body">
            <div class="info-item">
                <i class="fas fa-id-badge"></i>
                <span><strong>ID:</strong> #<?php echo $user['user_id'] ?></span>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <span><strong>Email:</strong> <?php echo $user['email'] ?></span>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <span><strong>Phone:</strong> <?php echo $user['number'] ?></span>
            </div>
            <div class="info-item">
                <i class="fas fa-key"></i>
                <span><strong>Password:</strong> <?php echo $user['password'] ?></span>
            </div>
        </div>

        <div class="card-footer">
            <a href="update_user.php?id=<?php echo $user['id'] ?>" class="btn edit-btn">Edit Profile</a>
            <a href="delete.php?user_name=<?php echo $user['name'] ?>" class="btn delete-btn">Delete</a>
        </div>
    </div>

    <?php endwhile ?>
</div>

    </div>

</body>

</html>
