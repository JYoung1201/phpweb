<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* CSS styles as needed */
    </style>
</head>
<body>
    <header class="header">
        <h1>About Us</h1>
    </header>
    <nav class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="phpinfo.php">PHP Info</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main class="content">
        <?php
            echo "<p>Breakthru Beverage Group is a leading North American beverage wholesaler driving innovation in the marketplace with a nimble and insightful approach to business. Breakthru is proud to be family-owned and operated, bringing valued expertise to its operations across the U.S. and Canada. The company employs more than 8,000 associates representing a portfolio of premier wine, spirit and beer brands totaling more than $7 billion in annual sales.</p>";
           
        ?>
    </main>
    <footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> jyoung1201.xyz</p>
    <p>Last Modified: <?php echo date("Y-m-d H:i:s", filemtime(__FILE__)); ?></p>
    <p>
        <a href="https://validator.w3.org/check/referer"><img src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML" height="31" width="88"></a>
        <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS" height="31" width="88"></a>
    </p>
</footer>

</body>
</html>
