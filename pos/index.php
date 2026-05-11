<?php
require_once __DIR__ . '/includes/functions.php';
if (empty($_SESSION['user_id'])) redirect(BASE_URL . '/auth/login.php');
redirect(BASE_URL . '/modules/dashboard.php');
