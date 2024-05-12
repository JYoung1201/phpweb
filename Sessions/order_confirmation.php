<?php
session_start();
include 'global/header.php';
include 'global/menu.php';

// Check if order details are available
if (!isset($_SESSION['order_details'])) {
    echo "<p>Error: Order details not found. Please try again.</p>";
    include 'global/footer.php';
    exit;
}

$orderDetails = $_SESSION['order_details'];
?>
<body>
<main class="content">
    <h2>Order Confirmation</h2>
    <p>Thank you for your purchase!</p>
    <p>Your order number is <strong><?= htmlspecialchars($orderDetails['order_number']) ?></strong>.</p>
    <p>We are currently processing your order and will notify you when it ships.</p>

    <h3>Order Details:</h3>
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <?php foreach ($orderDetails['items'] as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td><?= $item['quantity'] ?></td>
            <td>$<?= number_format($item['price'], 2) ?></td>
            <td>$<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total</td>
            <td><strong>$<?= number_format($orderDetails['total'], 2) ?></strong></td>
        </tr>
    </table>
</main>
<?php include 'global/footer.php'; ?>
</body>
<?php
// Clear order details from session
unset($_SESSION['order_details']);
?>