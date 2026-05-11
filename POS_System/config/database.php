<?php 

    $conn = new mysqli('localhost', 'root', '', 'pos_system');
    if($conn->connect_error){
        die("Error:" . $conn->connect_error);
    }

?>