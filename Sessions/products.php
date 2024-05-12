<?php


session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user'])) {
    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI']; // Store the current URL
    header('Location: login.php');
    exit;
}
include 'global/header.php';
include 'global/menu.php';

$products = [
    ['id' => 1, 'name' => 'Vodka', 'description' => 'Smooth distilled spirit', 'price' => 20],
    ['id' => 2, 'name' => 'Whiskey', 'description' => 'Aged oak barrels spirit', 'price' => 25],
    ['id' => 3, 'name' => 'Rum', 'description' => 'Sweet and strong', 'price' => 22],
    ['id' => 4, 'name' => 'Gin', 'description' => 'Botanical flavors', 'price' => 18],
    ['id' => 5, 'name' => 'Tequila', 'description' => 'Blue agave spirit', 'price' => 30],
    ['id' => 6, 'name' => 'Brandy', 'description' => 'Fruit-based spirit', 'price' => 28],
    ['id' => 7, 'name' => 'Absinthe', 'description' => 'Anise-flavored spirit', 'price' => 35],
    ['id' => 8, 'name' => 'Sake', 'description' => 'Japanese rice wine', 'price' => 15],
    ['id' => 9, 'name' => 'Cognac', 'description' => 'Variety of brandy', 'price' => 40],
    ['id' => 10, 'name' => 'Champagne', 'description' => 'Sparkling wine from France', 'price' => 50]
];
?>
<p><a href="cart.php">View Cart</a></p>
<div class="content">
    <?php foreach ($products as $product): ?>
    <div class="product">
        <h2><?= htmlspecialchars($product['name']) ?></h2>
        <p><?= htmlspecialchars($product['description']) ?></p>
        <p>Price: $<?= number_format($product['price'], 2) ?></p>
        <form action="update_cart.php" method="post" class="add-to-cart-form">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <input type="hidden" name="name" value="<?= htmlspecialchars($product['name']) ?>">
            <input type="hidden" name="price" value="<?= $product['price'] ?>">
            <input type="number" name="quantity" value="1" min="1" style="width: 50px;">
            <input type="hidden" name="action" value="add">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
    <?php endforeach; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('.add-to-cart-form').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting through the browser
        var form = $(this);
        $.ajax({
            type: "POST",
            url: "update_cart.php",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                alert("Product added to cart!"); // Show a success message
            }
        });
    });
});
</script>

<!-- Add spacer -->
<div style="height: 200px;"></div>
<?php
include 'global/footer.php';
?>