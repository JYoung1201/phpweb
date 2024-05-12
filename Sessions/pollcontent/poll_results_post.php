<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Poll Results (POST)</title>
</head>
<body>

<h2>Poll Results (POST)</h2>

<?php
if(isset($_POST['name']) && !empty($_POST['name'])) {
    echo "<p>Thank you, ".$_POST['name'].", for participating in the poll!</p>";
} else {
    echo "<p>Thank you for participating in the poll!</p>";
}

if(isset($_POST['product1_rating']) && isset($_POST['product2_rating']) && isset($_POST['product3_rating']) && isset($_POST['comments'])) {
    echo "<h3>Product 1</h3>";
    echo "<p>Rating: ".$_POST['product1_rating']."</p>";

    echo "<h3>Product 2</h3>";
    echo "<p>Rating: ".$_POST['product2_rating']."</p>";

    echo "<h3>Product 3</h3>";
    echo "<p>Rating: ".$_POST['product3_rating']."</p>";

    echo "<h3>Comments</h3>";
    echo "<p>".$_POST['comments']."</p>";
} else {
    echo "<p>No poll data submitted.</p>";
}
?>

</body>
</html>
