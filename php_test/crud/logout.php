<?php
    session_start();
    require('common/connection.php');

    session_destroy();
    setcookie('email', '', time() - (60*60*24));
    setcookie('password', '', time() - (60*60*24));

    header('Location: login.php');
    exit();

    ?>
