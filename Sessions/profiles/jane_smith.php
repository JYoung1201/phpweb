<?php
// Include variables.php to access the variables
include 'variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $employee2_name; ?></title>
    <style>
        /* CSS to style the image */
        img {
            max-width: 100%; /* Ensure image doesn't exceed its container */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Remove extra space below the image */
            margin: 0 auto; /* Center the image horizontally */
        }
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
        <li><a href="../indexwithcss.php">Home</a></li>
            <li><a href="../module1foundations.php">Module 1: Week 1 Foundations</a></li>
            <li><a href="../module1variables.php">Module 1: Week 1 Variables</a></li>
            <li><a href="../module2.php">Module 2: Week 2 Forms</a></li>
            <li><a href="../module3.php">Module 3: Week 3 Arrays</a></li>
            <li><a href="../module4.php">Module 4: Week 4 Sessions</a></li>
            <li><a href="../module5.php">Module 5: Week 5 CMS Sessions</a></li>
            <li><a href="../module6.php">Module 6: Week 6 Database</a></li>
            <li><a href="../module8.php">Module 8: Foundations</a></li>
            <li><a href="../about.php">About Us</a></li>
            <li><a href="../phpinfo.php">PHP Info</a></li>
            <li><a href="../contact.php">Contact Us</a></li>
        </ul>
</nav>
<body>
    <h1><?php echo $employee2_name; ?></h1>
    <img src="profile images\jane_smith.jpg" alt="<?php echo $employee2_name; ?>">
    <p><strong>Job Title:</strong> <?php echo $employee2_job_title; ?></p>
    <p><strong>Department:</strong> <?php echo $employee2_department; ?></p>
    <p><strong>Degree:</strong> <?php echo $employee2_degree; ?></p>
    <p><strong>Hobby:</strong> <?php echo $employee2_hobby; ?></p>
    <p><strong>Goals:</strong> <?php echo $employee2_goals; ?></p>
    <p><strong>Interests:</strong> <?php echo $employee2_interests; ?></p>
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
