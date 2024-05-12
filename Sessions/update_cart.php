<?php
session_start();

// Check if the cart is already initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handling different actions: add, update, remove
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $productId = $_POST['id'];
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    switch ($action) {
        case 'add':
            // Add or update the product in the cart
            if (!isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId] = [
                    'name' => $_POST['name'],  // Assuming name is passed in POST
                    'price' => $_POST['price'],  // Assuming price is passed in POST
                    'quantity' => $quantity
                ];
            } else {
                // Update quantity if product already exists
                $_SESSION['cart'][$productId]['quantity'] += $quantity;
            }
            break;

        case 'update':
            // Update the quantity of an existing product
            if (isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId]['quantity'] = $quantity;
            }
            break;

        case 'remove':
            // Remove the product from the cart
            if (isset($_SESSION['cart'][$productId])) {
                unset($_SESSION['cart'][$productId]);
            }
            break;
    }
}

// Redirect back to the cart page
header('Location: cart.php');
exit();