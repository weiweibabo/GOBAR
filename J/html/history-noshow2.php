<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php

$sql = sprintf("SELECT `date`,`weekdays`, `people`, `time` FROM `orders` ORDER BY `sid` desc limit 1 ; ");
$stmt = $pdo->query($sql);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($orders, JSON_UNESCAPED_UNICODE);
?>

<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php include __DIR__ . '/../../parts/html-head.php'; ?>
<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<link rel="stylesheet" href="../css/history-noshow2.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet" />

<<<<<<< HEAD
<body>
=======
    <header>
        <div class="navbar1"></div>
    </header>
>>>>>>> 97ee0eb73cf6f53576ce8f5cbae797b4b7cd731f

    <main>
        <div class="mainblock container-fluid w-75">
            <div class="row">
                <div class="col-6 col-xl-6">
                    <div class="topname">
                        <a href="">
                            <p>即將前往</p>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-xl-6">
                    <div class="topname1">
                        <a href="">
                            <p>歷史紀錄</p>
                        </a>
                    </div>
                </div>

            </div>

            <div class="card-area column position-relative pt-5 pb-5">

                <div class="card1 d-flex position-relative">
                    <div class="date col-1 col-xl-2">
                        <p class="date-text"></p><?= substr($orders[0]["date"], 0, 4), '/', substr($orders[0]["date"], 5, 2) ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="139" height="141" viewBox="0 0 139 141">
                            <g id="Group_464" data-name="Group 464" transform="translate(0 0.339)">
                                <rect id="Rectangle_1464" data-name="Rectangle 1464" width="139" height="139" rx="15" transform="translate(0 1.661)" fill="#fff" />
                                <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H124a15,15,0,0,1,15,15V55a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0 -0.339)" fill="#ff8d00" />
                                <text id="_18" data-name="18" transform="translate(31 119.661)" fill="#ff8d00" font-size="64" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["date"], 8, 2) ?></tspan>
                                </text>
                                <text id="FRIDAY" transform="translate(22 37.661)" fill="#fff" font-size="27" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["weekdays"], 0, 3) ?></tspan>
                                </text>
                            </g>
                        </svg>
                    </div>

                    <div class="photo col-xl-2">
                        <img src="../img/work-bar.jpg" alt="" style="width: 250px; height: 212px;">
                    </div>

                    <div class="name col-xl-3">
                        <h1>安慰劑 Placebo Taipei</h1>
                        <p>訂位時段 : <?= $orders[0]["time"] ?></p>
                        <p>訂位人數 : <?= $orders[0]["people"] ?> 位</p>
                    </div>

                    <div class="img-ink">
                        <img src="../Gobar-svg-png/PNG/印章.png" alt="" width="300px" height="300px">
                    </div>

                    <div class="noshowtext">
                        <p>NO SHOW</p>
                    </div>

                    <div class="col-1 col-xl-1"></div>
                    <div class="answer col-1 col-xl-3">
                        <div class="textbox2">
                            <p>查看詳情</p>
                        </div>
                        <div class="textbox1">
                            <p>取消訂位</p>
                        </div>
                    </div>

                </div>

                <div class="card2 d-flex position-relative">
                    <div class="date col-1 col-xl-2">
                        <p class="date-text"></p><?= substr($orders[0]["date"], 0, 4), '/', substr($orders[0]["date"], 5, 2) ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="139" height="141" viewBox="0 0 139 141">
                            <g id="Group_464" data-name="Group 464" transform="translate(0 0.339)">
                                <rect id="Rectangle_1464" data-name="Rectangle 1464" width="139" height="139" rx="15" transform="translate(0 1.661)" fill="#fff" />
                                <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H124a15,15,0,0,1,15,15V55a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0 -0.339)" fill="#ff8d00" />
                                <text id="_18" data-name="18" transform="translate(31 119.661)" fill="#ff8d00" font-size="64" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["date"], 8, 2) ?></tspan>
                                </text>
                                <text id="FRIDAY" transform="translate(22 37.661)" fill="#fff" font-size="27" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["weekdays"], 0, 3) ?></tspan>
                                </text>
                            </g>
                        </svg>
                    </div>

                    <div class="photo col-xl-2">
                        <img src="../img/work-bar.jpg" alt="" style="width: 250px; height: 212px;">
                    </div>

                    <div class="name col-xl-3">
                        <h1>安慰劑 Placebo Taipei</h1>
                        <p>訂位時段 : <?= $orders[0]["time"] ?></p>
                        <p>訂位人數 : <?= $orders[0]["people"] ?> 位</p>
                    </div>

                    <div class="col-1 col-xl-1"></div>
                    <div class="answer col-1 col-xl-3">
                        <div class="textbox2">
                            <p>查看詳情</p>
                        </div>
                        <div class="textbox1">
                            <p>取消訂位</p>
                        </div>
                    </div>
                </div>

                <div class="card3 d-flex position-relative">
                    <div class="date col-1 col-xl-2">
                        <p class="date-text"><?= substr($orders[0]["date"], 0, 4), '/', substr($orders[0]["date"], 5, 2) ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="139" height="141" viewBox="0 0 139 141">
                            <g id="Group_464" data-name="Group 464" transform="translate(0 0.339)">
                                <rect id="Rectangle_1464" data-name="Rectangle 1464" width="139" height="139" rx="15" transform="translate(0 1.661)" fill="#fff" />
                                <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H124a15,15,0,0,1,15,15V55a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0 -0.339)" fill="#ff8d00" />
                                <text id="_18" data-name="18" transform="translate(31 119.661)" fill="#ff8d00" font-size="64" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["date"], 8, 2) ?></tspan>
                                </text>
                                <text id="FRIDAY" transform="translate(22 37.661)" fill="#fff" font-size="27" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["weekdays"], 0, 3) ?></tspan>
                                </text>
                            </g>
                        </svg>
                    </div>

                    <div class="photo col-xl-2">
                        <img src="../img/work-bar.jpg" alt="" style="width: 250px; height: 212px;">
                    </div>
                    <div class="name col-xl-3">
                        <h1>安慰劑 Placebo Taipei</h1>
                        <p>訂位時段 : <?= $orders[0]["time"] ?></p>
                        <p>訂位人數 : <?= $orders[0]["people"] ?> 位</p>
                    </div>

                    <div class="img-ink">
                        <img src="../Gobar-svg-png/PNG/印章.png" alt="" width="300px" height="300px">
                    </div>

                    <div class="noshowtext">
                        <p>NO SHOW</p>
                    </div>

                    <div class="col-1 col-xl-1"></div>
                    <div class="answer col-1 col-xl-3">
                        <div class="textbox2">
                            <a href="">
                                <p>查看詳情</p>
                            </a>
                        </div>

                        <div class="textbox1">
                            <a href="#">
                                <p>取消訂位</p>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="card4 d-flex position-relative">
                    <div class="date col-1 col-xl-2">
                        <p class="date-text"><?= substr($orders[0]["date"], 0, 4), '/', substr($orders[0]["date"], 5, 2) ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="139" height="141" viewBox="0 0 139 141">
                            <g id="Group_464" data-name="Group 464" transform="translate(0 0.339)">
                                <rect id="Rectangle_1464" data-name="Rectangle 1464" width="139" height="139" rx="15" transform="translate(0 1.661)" fill="#fff" />
                                <path id="Rectangle_1463" data-name="Rectangle 1463" d="M15,0H124a15,15,0,0,1,15,15V55a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V15A15,15,0,0,1,15,0Z" transform="translate(0 -0.339)" fill="#ff8d00" />
                                <text id="_18" data-name="18" transform="translate(31 119.661)" fill="#ff8d00" font-size="64" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["date"], 8, 2) ?></tspan>
                                </text>
                                <text id="FRIDAY" transform="translate(22 37.661)" fill="#fff" font-size="27" font-family="NotoSansTC-Bold, Noto Sans TC" font-weight="700">
                                    <tspan x="0" y="0"><?= substr($orders[0]["weekdays"], 0, 3) ?></tspan>
                                </text>
                            </g>
                        </svg>
                    </div>
                    <div class="photo col-xl-2">
                        <img src="../img/work-bar.jpg" alt="" style="width: 250px; height: 212px;">
                    </div>
                    <div class="name col-xl-3">
                        <h1>安慰劑 Placebo Taipei</h1>
                        <p>訂位時段 : <?= $orders[0]["time"] ?></p>
                        <p>訂位人數 : <?= $orders[0]["people"] ?> 位</p>
                    </div>

                    <div class="col-1 col-xl-1"></div>
                    <div class="answer col-1 col-xl-3">
                        <div class="textbox2">
                            <a href="#">
                                <p>查看詳情</p>
                            </a>
                        </div>

                        <div class="textbox1">
                            <a href="#">
                                <p>取消訂位</p>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

<?php include __DIR__ . '/../../parts/about.php'; ?>