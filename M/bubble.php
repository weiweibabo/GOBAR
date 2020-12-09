<?php include __DIR__ . '/../parts/config.php'; ?>
<?php include __DIR__ . '/../parts/html-head.php'; ?>
<?php include __DIR__ . '/../parts/scripts.php'; ?>
<link rel="stylesheet" href="<?= WEB_ROOT ?>M/css/bubble.css">

<body>
    <div class="glass">
        <div class="neck"></div>
        <div class="water">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
        </div>
    </div>
</body>

<script language=javascript>
    setTimeout('window.location="../M/firstpage.php"', 2000)
</script>

</html>