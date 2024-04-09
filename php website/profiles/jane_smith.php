<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $employee2_name; ?></title>
</head>
<body>
    <h1><?php echo $employee2_name; ?></h1>
    <img src="jane_smith.jpg" alt="<?php echo $employee2_name; ?>">
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
