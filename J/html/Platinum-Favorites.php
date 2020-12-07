<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/Platinum-Favorites.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<body>

    <main>

        <div class="header"></div>

        <div class="container-fluid" style="width:75%">
            <div class="row">
                <div class="col-6 col-xl-6">
                    <div class="topname">
                        <p>收藏店家</p>
                    </div>
                </div>
                <div class="col-6 col-xl-6">
                    <div class="topname1">
                        <a href="./GOBAR/J/html/history.php">
                            <p>收藏文章</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-area d-flex" style="padding: 5rem 0;">

                <div class="card2 col-xl-4 col-sm-12 px-0">
                    <img src="<?= WEB_ROOT ?>data/img/Odin信義放感情.jpg" alt="" width="378" height="360">
                    <div class="card1">
                        <h2>Odin信義放感情</h2>
                        <p>台北市信義區嘉興街127巷107號</p>
                        <div class="cardmoney d-flex justify-content-between align-items-center">
                            <div class="barphoto">
                                <img src="../Gobar-svg-png/SVG/star.svg" alt="" width="160">
                            </div>
                            <p>4.9</p>
                            <h1>$200起</h1>
                        </div>
                    </div>
                    <div class="bottom-text">
                        <p>我要訂位</p>
                    </div>
                </div>

                <div class="card2 col-xl-4 col-sm-12 px-0">
                    <img src="<?= WEB_ROOT ?>data/img/安慰劑 Placebo Taipei.jpg" alt="" width="378" height="360">
                    <div class="card1">
                        <h2>安慰劑 Placebo Taipei</h2>
                        <p>台北市信義區基隆路二段83號</p>
                        <div class="cardmoney d-flex justify-content-between align-items-center">
                            <img src="../Gobar-svg-png/SVG/star.svg" alt="" width="160">
                            <p>4.3</p>
                            <h1>$200起</h1>
                        </div>
                    </div>
                    <div class="bottom-text">
                        <p>我要訂位</p>
                    </div>
                </div>

                <div class="card2 col-xl-4 col-sm-12 px-0">
                    <img src="<?= WEB_ROOT ?>data/img/Lost in NEMEA.jpg" alt="" width="378" height="360">
                    <div class="card1">
                        <h2>Lost in NEMEA</h2>
                        <p>台北市信義區基隆路二段151-1號</p>
                        <div class="cardmoney d-flex justify-content-between align-items-center">
                            <img src="../Gobar-svg-png/SVG/star.svg" alt="" width="160">
                            <p>4.7</p>
                            <h1>$200起</h1>
                        </div>
                    </div>
                    <div class="bottom-text">
                        <p>我要訂位</p>
                    </div>
                </div>

                <div class="card2 col-xl-4 col-sm-12 px-0">
                    <img src="<?= WEB_ROOT ?>data/img/渣男Taiwan-Bistro.jpg" alt="" width="378" height="360">
                    <div class="card1">
                        <h2>渣男Taiwan Bistro</h2>
                        <p>台北市信義區信義路五段150巷315弄12號</p>
                        <div class="cardmoney d-flex justify-content-between align-items-center">
                            <img src="../Gobar-svg-png/SVG/star.svg" alt="" width="160">
                            <p>4.9</p>
                            <h1>$250起</h1>
                        </div>
                    </div>
                    <div class="bottom-text">
                        <p>我要訂位</p>
                    </div>
                </div>

                <div class="card2 col-xl-4 col-sm-12 px-0">
                    <img src="<?= WEB_ROOT ?>data/img/小後苑Backyard Jr..jpg" alt="" width="378" height="360">
                    <div class="card1">
                        <h2>小後苑Backyard Jr.</h2>
                        <p>台北市信義區松壽路9號3樓</p>
                        <div class="cardmoney d-flex justify-content-between align-items-center">
                            <img src="../Gobar-svg-png/SVG/star.svg" alt="" width="160">
                            <p>4.3</p>
                            <h1>$200起</h1>
                        </div>
                    </div>
                    <div class="bottom-text">
                        <p>我要訂位</p>
                    </div>
                </div>

                <div class="card2 col-xl-4 col-sm-12 px-0">
                    <img src="<?= WEB_ROOT ?>data/img/Alchemy Bar.jpg" alt="" width="378" height="360">
                    <div class="card1">
                        <h2>Alchemy Bar</h2>
                        <p>台北市信義區信義路五段16-1號2樓</p>
                        <div class="cardmoney d-flex justify-content-between align-items-center">
                            <img src="../Gobar-svg-png/SVG/star.svg" alt="" width="160">
                            <p>4.4</p>
                            <h1>$300起</h1>
                        </div>
                    </div>
                    <div class="bottom-text">
                        <p>我要訂位</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>