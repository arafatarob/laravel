<?php

    $myDB = new mysqli("localhost", "root", "", "arafat");

    if($myDB->connect_error){
      die("connection error" . $myDB->connect_error);
    }

 ?>
