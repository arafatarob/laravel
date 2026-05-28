<?php 

    include('db.php');

    $id = $_GET['id'];

    $sql = $conn->query("DELETE FROM products WHERE id='$id'");

    if($sql){
        header('Location: index.php');
    }

?>