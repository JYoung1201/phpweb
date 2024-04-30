<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Organizational Chart</title>
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
    <h2>Update Organizational Chart</h2>
    <form action="profiles/update_process.php" method="POST">
        <label for="person">Select Person:</label>
        <select name="person" id="person">
            <option value="John Doe">John Doe</option>
            <option value="Jane Smith">Jane Smith</option>
            <option value="Michael Johnson">Michael Johnson</option>
        </select>
        <br><br>
        <label for="job">Job Title:</label>
        <input type="text" id="job" name="job">
        <br><br>
        <label for="department">Department:</label>
        <input type="text" id="department" name="department">
        <br><br>
        <label for="degree">Degree:</label>
        <input type="text" id="degree" name="degree">
        <br><br>
        <label for="hobby">Hobby:</label>
        <input type="text" id="hobby" name="hobby">
        <br><br>
        <label for="goals">Goals:</label>
        <input type="text" id="goals" name="goals">
        <br><br>
        <label for="interests">Interests:</label>
        <input type="text" id="interests" name="interests">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> jyoung1201.xyz</p>
    <p>Last Modified: <?php echo date("Y-m-d H:i:s", filemtime(__FILE__)); ?></p>
    <p>
        <a href="https://validator.w3.org/check/referer"><img src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML" height="31" width="88" /></a>
        <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS" height="31" width="88" /></a>
    </p>
  </footer>
</html>
