<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include 'global/header.php'; ?>
<?php include 'global/menu.php'; ?>
  <main class="content">
    <h2>Module 1: Variables</h2>
    <p>This page will contain content related to Module 1 of the Web Development Foundations course.</p>
    <!-- Include organizational chart -->
    <h3>Organizational Chart</h3>
    <ul>
        <li>
            <img src="profiles\profile images\john_doe.jpg" alt="John Doe" width="100">
            <a href="profiles\john_doe.php">John Doe</a>
        </li>
        <li>
            <img src="profiles\profile images\jane_smith.jpg" alt="Jane Smith" width="100">
            <a href="profiles\jane_smith.php">Jane Smith</a>
        </li>
        <li>
            <img src="profiles\profile images\michael_johnson.jpg" alt="Michael_johnson" width="100">
            <a href="profiles\michael_johnson.php">Michael Johnson</a>
        </li>
    </ul>
    <p>Last Modified: <?php echo date("Y-m-d H:i:s", filemtime(__FILE__)); ?></p>
  </main>
  <?php include 'global/footer.php'; ?>

</body>
</html>

