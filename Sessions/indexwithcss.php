<?php include 'global/header.php'; ?>
<?php include 'global/menu.php'; ?>
<body>
    <main class="content">
        <p>Welcome to my website! This site is under development as I progress through the Web Development Foundations course. Check back for updates as I complete each module.</p>
        <p>Last Modified: <?php echo date("Y-m-d H:i:s", filemtime(__FILE__)); ?></p>
    </main>
    <?php include 'global/footer.php'; ?>
</body>
</html>
