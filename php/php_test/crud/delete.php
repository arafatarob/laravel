<?php 

    require('common/connection.php');

    $name = $_GET['user_name'];

    $delete = $connect->query("DELETE FROM users WHERE name = '$name'");
    if($delete){
        header('Location: oneView.php');
    }else{
        echo "<script> alert('delete failed') </script>";
    }


    if($deleteU){
        header('Location: oneView.php');
    }else{
        echo "<script> alert('delete failed') </script>";
    }
    
?>