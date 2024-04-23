<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Light gray background color */
        }

        .header {
            background-color: #333; /* Dark gray background color */
            color: #fff; /* White text color */
            padding: 20px;
            text-align: center;
        }

        .navigation {
            background-color: #444; /* Slightly lighter than header background */
            padding: 10px;
        }

        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .navigation ul li {
            display: inline;
            margin-right: 20px;
        }

        .navigation ul li a {
            color: #fff; /* White text color */
            text-decoration: none;
        }

        .navigation ul li a:hover {
            color: #ff8c00; /* Orange text color on hover */
        }

        .content {
            padding: 20px;
        }

        .footer {
            background-color: #333; /* Dark gray background color */
            color: #fff; /* White text color */
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<nav class="navigation">
        <ul>
            <li><a href="indexwithcss.php">Home</a></li>
            <li><a href="module1foundations.php">Module 1: Week 1 Foundations</a></li>
            <li><a href="module1variables.php">Module 1: Week 1 Variables</a></li>
            <li><a href="module2.php">Module 2: Week 2 Forms</a></li>
            <li><a href="module3.php">Module 3: Week 3 Arrays</a></li>
            <li><a href="module4.php">Module 4: Week 4 Sessions</a></li>
            <li><a href="module5.php">Module 5: Week 5 CMS Sessions</a></li>
            <li><a href="module6.php">Module 6: Week 6 Database</a></li>
            <li><a href="module8.php">Module 8: Foundations</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="phpinfo.php">PHP Info</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
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
