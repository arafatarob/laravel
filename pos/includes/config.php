<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'pos_db1');
define('DB_USER', 'root');
define('DB_PASS', '');

define('BASE_URL', 'http://localhost/pos');
define('UPLOAD_PATH', __DIR__ . '/../uploads/');

date_default_timezone_set('Asia/Dhaka');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    die('Database connection failed: ' . htmlspecialchars($e->getMessage()));
}
