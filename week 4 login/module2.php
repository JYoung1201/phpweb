<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Poll</title>
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
            text-align: center;
        }

        .poll {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
        }

        .poll h2 {
            margin-bottom: 10px;
        }

        .poll input[type="radio"] {
            margin-right: 5px;
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
<body>
    <header class="header">
        <h1>Web Poll</h1>
    </header>
    <nav class="navigation">
        <ul>
            <li><a href="indexwithcss.php">Home</a></li>
            <li><a href="pollcontent/poll_get.php">Poll with GET</a></li>
            <li><a href="pollcontent/poll_post.php">Poll with POST</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> jyoung1201.xyz</p>
    <p>Last Modified: <?php echo date("Y-m-d H:i:s", filemtime(__FILE__)); ?></p>
    <p>
        <a href="https://validator.w3.org/check/referer"><img src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML" height="31" width="88" /></a>
        <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS" height="31" width="88" /></a>
    </p>
  </footer>