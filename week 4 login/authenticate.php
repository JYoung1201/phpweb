<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'customer' && $password === 'customer') {
    $_SESSION['user'] = $username;
    header('Location: module1variables.php');
    exit;
} else {
    echo "<script>alert('Invalid username or password!'); window.location='login.php';</script>";
}
?>