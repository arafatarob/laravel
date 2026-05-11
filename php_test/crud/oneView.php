<?php

    require('common/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - View</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    background: linear-gradient(135deg, #ed379c 0%, #177665 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.view-container {
    width: 100%;
    max-width: 1520px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    padding: 30px;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
    color: white;
}

.add-btn {
    background: #00d2ff;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    transition: 0.3s;
}

.add-btn:hover {
    background: #3a7bd5;
    box-shadow: 0 5px 15px rgba(0, 210, 255, 0.4);
}

.table-wrapper {
    overflow-x: auto;
}

.user-table {
    width: 100%;
    border-collapse: collapse;
    color: white;
    text-align: left;
}

.user-table thead tr {
    background: rgba(255, 255, 255, 0.2);
}

.user-table th, .user-table td {
    padding: 15px 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.user-table tbody tr:hover {
    background: rgba(255, 255, 255, 0.05);
}

.pass-blur {
    letter-spacing: 2px;
    opacity: 0.7;
}

/* Action Buttons */
.actions a {
    text-decoration: none;
    margin-right: 15px;
    font-size: 18px;
    transition: all  0.2s ease-in-out;
    text-transform: uppercase;
    font-weight: 600;
}

.edit-link { color: #ffcc00; }
.delete-link { color: #ff4d4d; }

.edit-link:hover { transform: scale(1.1); color: #fff; }
.delete-link:hover { transform: scale(1.1); color: #fff; }

/* Responsive */
@media (max-width: 768px) {
    .table-header {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}
    </style>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="view-container">
    <div class="table-header">
        <h2><i class="fas fa-users"></i> Registered Users</h2>
        <div class="add">
          <a href="insert.php" class="add-btn">+ Add New User</a>
          <a href="login.php" class="add-btn">+ Login</a>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $result = $connect->query("SELECT * FROM users ORDER BY id DESC");
                if(isset($_GET['search'])) {
                  $search = $_GET['search'];

                  $sql ="SELECT * FROM users  WHERE concat(user_id, name, email) LIKE '%$search%' ";

                  $result = mysqli_query($connect, $sql);


                }

                    while($user = $result->fetch_assoc()){


            ?>
                <tr>
                    <td>#<?php echo $user['user_id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['number'] ?></td>
                    <td><?php echo $user['role'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td class="actions">
                        <a class="edit-link" href="update_user.php?id=<?php echo $user['id'] ?>">update</a>
                        <a class="delete-link" href="delete.php?user_name=<?php echo $user['name'] ?>">delete</a>
                        <a class="edit-link" href="view.php?id=<?php echo $user['id'] ?>">view</a>
                    </td>
                </tr>

                <?php }  ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
