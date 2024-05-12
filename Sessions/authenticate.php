<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Define user credentials
$credentials = [
    'admin' => 'admin',
    'publisher' => 'publisher',
    'customer' => 'customer'
];

if (isset($credentials[$username]) && $password === $credentials[$username]) {
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $username; // Storing the role in the session

    // Redirect to the stored URL or default to a specific page if not set
    $redirectUrl = $_SESSION['redirect_to'] ?? 'products.php';
    unset($_SESSION['redirect_to']); // Clear the stored URL to prevent reuse
    header('Location: ' . $redirectUrl);
    exit;
} else {
    echo "<script>alert('Invalid username or password!'); window.location='login.php';</script>";
}
?>