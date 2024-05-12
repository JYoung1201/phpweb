<?php
session_start();
include 'global/header.php';
include 'global/menu.php';

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
    include 'global/footer.php';
    exit;
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
$taxRate = 0.05;
$taxes = $total * $taxRate;
$grandTotal = $total + $taxes;
?>
<body>
<main class="content">
    <h2>Checkout</h2>
    <table>
        <!-- Table headers -->
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        <!-- List items -->
        <?php foreach ($_SESSION['cart'] as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td><?= $item['quantity'] ?></td>
            <td>$<?= number_format($item['price'], 2) ?></td>
            <td>$<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
        <!-- Display totals -->
        <tr>
            <td colspan="3">Subtotal</td>
            <td>$<?= number_format($total, 2) ?></td>
        </tr>
        <tr>
            <td colspan="3">Tax (5%)</td>
            <td>$<?= number_format($taxes, 2) ?></td>
        </tr>
        <tr>
            <td colspan="3"><strong>Grand Total</strong></td>
            <td><strong>$<?= number_format($grandTotal, 2) ?></strong></td>
        </tr>
    </table>
    <form action="process_order.php" method="post">
        <input type="submit" value="Confirm Order">
    </form>
</main>
<?php include 'global/footer.php'; ?>
</body>