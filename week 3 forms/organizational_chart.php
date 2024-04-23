<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizational Chart</title>
</head>
<body>
    <h1>Organizational Chart</h1>
    <ul>
        <li><a href="profiles/profile images/john_doe.jpg"><?php echo $employee1_name; ?></a></li>
        <li><a href="profiles/profile images/jane_smith.jpg"><?php echo $employee2_name; ?></a></li>
        <li><a href="profiles/profile images/michael_johnson.jpg"><?php echo $employee3_name; ?></a></li>
    </ul>
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
