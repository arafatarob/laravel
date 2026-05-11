<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database connect</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

    <?php $connect = new mysqli('localhost', 'root', '', 'pos_db') ?>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>number</th>
        </tr>

        <?php 
        $user = $connect->query('SELECT * FROM users');
        while($item = $user->fetch_assoc()) { 

        
    ?>

    <tr>
        <td><?php echo $item['id'] ?></td>
        <td><?php echo $item['name'] ?></td>
        <td><?php echo $item['email'] ?></td>
        <td><?php echo $item['number'] ?></td>
    </tr>

    <?php } ?>
    </table>

    
    
</body>
</html>