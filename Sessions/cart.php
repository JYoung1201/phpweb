<?php
session_start();
include 'global/header.php';
include 'global/menu.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
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
    <h2>Your Cart</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td>$<?= number_format($item['price'], 2) ?></td>
                    <td>$<?= number_format($item['price'] * $item['quantity'], 2) ?></td>
                    <td>
                        <a href="javascript:void(0);" onclick="removeFromCart(<?= $id ?>)">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
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
        <!-- Checkout Button -->
        <form action="checkout.php" method="get">
            <button type="submit" class="checkout-button">Proceed to Checkout</button>
        </form>
    <?php endif; ?>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function removeFromCart(productId) {
    $.ajax({
        type: "POST",
        url: "update_cart.php",
        data: { id: productId, action: 'remove' },
        success: function(data) {
            location.reload(); // Reload the page to update the cart display
        }
    });
}
</script>
<?php include 'global/footer.php'; ?>
</body>