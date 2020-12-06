<?php include __DIR__ . '/../../parts/config.php'; ?>

<link rel="stylesheet" href="../css/landing-page.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@1,800&display=swap" rel="stylesheet">

<?php include __DIR__ . '/../../parts/scripts.php'; ?>

<body>

    <div class="container-fuild position-relative">
        <div class="black-box"></div>

        <video loop="true" autoplay="autoplay" muted="true">
            <source type="video/mp4" src="<?= WEB_ROOT ?>J/video/newbartender.mp4">
            </source>
        </video>

        <div class="nav-text">
            <p>SERCH BAR & HAVE FUN</p>
        </div>

        <figure>
            <div>
                <span>Touchme</span>
                <span>Home</span>
            </div>
        </figure>

        <div class="logo">
            <img src="<?= WEB_ROOT ?>J/Gobar-svg-png/PNG/LOGO.png" alt="" width="120">
        </div>

        <div class="black-box"></div>
    </div>
</body>

<!-- <script>
    $(function() {
        $("#button").click(function() {
            $("#button").addClass("onclic", 250, validate);
        });

        function validate() {
            setTimeout(function() {
                $("#button").removeClass("onclic");
                $("#button").addClass("validate", 450, callback);
            }, 2250);
        }

        function callback() {
            setTimeout(function() {
                $("#button").removeClass("validate");
            }, 1250);
        }
    });
</script> -->

</html>