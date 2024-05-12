<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Poll Results</title>
</head>
<body>

<h2>Poll Results</h2>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $name = $_GET["name"];
    $product1_rating = $_GET["product1_rating"];
    $product2_rating = $_GET["product2_rating"];
    $product3_rating = $_GET["product3_rating"];
    $comments = $_GET["comments"];

    // Display submitted data
    echo "<p>Name: $name</p>";
    echo "<p>Product 1 Rating: $product1_rating</p>";
    echo "<p>Product 2 Rating: $product2_rating</p>";
    echo "<p>Product 3 Rating: $product3_rating</p>";
    echo "<p>Comments: $comments</p>";
}
?>

</body>
</html>
