<?php 
    $conn = new mysqli('localhost', 'root', '', 'projectcontroller');
    if($conn->connect_error){
        die($conn->connect_error);
    }
?>