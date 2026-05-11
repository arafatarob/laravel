<?php
    session_start();
    require('common/connection.php');

    session_destroy();

    header('Location: login.php');
    exit();

    ?>
