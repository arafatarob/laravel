<?php 

    $conn = new mysqli('localhost', 'root', '', 'crud');

    if($conn->connect_error){
        die('connection error: ' . $conn->connect_error);    
    }

?>