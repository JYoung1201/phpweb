<?php include 'global/header.php'; ?>
<?php include 'global/menu.php'; ?>
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
