<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <style type="text/css">
        /* CSS styles as needed */
    </style>
</head>
<body>
    <header class="header">
        <h1>Contact Us</h1>
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
            echo "<p>Contact information for the company.</p>";
            echo "<p>You can reach us at bsc-custsrv-faxorder@breakthrubev.com or call us at (651) 482-1133.</p>";
        ?>
    </main>
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> jyoung1201.xyz</p>
    </footer>
</body>
</html>
