<?php 

    $connect = new mysqli('localhost', 'root', '', 'crud');

    if($connect->connect_error){
        die('connection errro' . $connect->connect_error);
    }

?>