<?php 

    $conn = new mysqli('localhost', 'root', '', 'admin_panel');

    if($conn->connect_error){
        die('Connection Failed : ' . $conn->connect_error);
    }

?>