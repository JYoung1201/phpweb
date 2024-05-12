<?php
session_start();

// Example of setting order details in session after processing the order
$_SESSION['order_details'] = [
    'order_number' => uniqid(), // Generate a unique order number
    'items' => $_SESSION['cart'],
    'total' => $grandTotal
];

// Redirect to order confirmation page
header('Location: order_confirmation.php');
exit;
?>