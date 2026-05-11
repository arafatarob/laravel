<?php
require_once __DIR__ . '/config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

function csrf_token() { return $_SESSION['csrf_token']; }
function csrf_field() { return '<input type="hidden" name="csrf_token" value="' . csrf_token() . '">'; }
function verify_csrf() {
    $t = $_POST['csrf_token'] ?? $_GET['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'] ?? '', $t)) {
        http_response_code(403);
        die('Invalid CSRF token');
    }
}

function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

function require_login() {
    if (empty($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . '/auth/login.php');
        exit;
    }
}

function require_role($roles) {
    require_login();
    $roles = is_array($roles) ? $roles : [$roles];
    if (!in_array($_SESSION['user_role'] ?? '', $roles, true)) {
        http_response_code(403);
        die('Forbidden');
    }
}

function current_user() {
    return [
        'id' => $_SESSION['user_id'] ?? null,
        'name' => $_SESSION['user_name'] ?? '',
        'role' => $_SESSION['user_role'] ?? '',
        'email' => $_SESSION['user_email'] ?? '',
    ];
}

function get_settings($pdo) {
    static $s = null;
    if ($s === null) {
        $s = $pdo->query("SELECT * FROM settings LIMIT 1")->fetch() ?: [];
    }
    return $s;
}

function flash($key, $msg = null) {
    if ($msg === null) {
        $m = $_SESSION['flash'][$key] ?? null;
        unset($_SESSION['flash'][$key]);
        return $m;
    }
    $_SESSION['flash'][$key] = $msg;
}

function redirect($url) { header("Location: $url"); exit; }

function format_money($v) {
    $s = get_settings($GLOBALS['pdo']);
    $cur = $s['currency'] ?? '৳';
    return $cur . ' ' . number_format((float)$v, 2);
}

function generate_no($prefix, $table, $col, $pdo) {
    $row = $pdo->query("SELECT $col FROM $table ORDER BY id DESC LIMIT 1")->fetch();
    $last = 1000;
    if ($row) {
        if (preg_match('/(\d+)$/', $row[$col], $m)) $last = (int)$m[1];
    }
    return $prefix . '-' . ($last + 1);
}
