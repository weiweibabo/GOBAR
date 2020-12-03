<?php include __DIR__ . '/../parts/config.php'; ?>
<?php include __DIR__ . '/../parts/html-head.php'; ?>
<?php include __DIR__ . '/../parts/scripts.php'; ?>
<?php include __DIR__ . '/../parts/navbar.php'; ?>
<link rel="stylesheet" href="<?= WEB_ROOT ?>M/css/newsign.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<body>
    <div class="signathihgbox"></div>
    <div class="signbg">
        <div id="singcardid" class="singcard">
            <div class="singlogo">
                <img src="../M/img/logowhite.svg" alt="">
            </div>

            <h3 class="singword1">會員登入</h3>

            <div class="signbycommunity">
                <div class="signline"></div>
                <p>用以下用以下帳號登入</p>
                <div class="signline"></div>
            </div>
            <div class="signcommunityicon">
                <div class="coloricon"><img src="../M/img/colorFB.svg" alt=""></div>
                <div class="coloricon"><img src="../M/img/colorIG.svg" alt=""></div>
                <div class="coloricon"><img src="../M/img/colorline.svg" alt=""></div>
            </div>
            <div class="signbycommunity">
                <div class="signline"></div>
                <p>用GOBAR帳號登入</p>
                <div class="signline"></div>
            </div>

            <div class="signaccount">
                <div class="input-group">
                    <input type="text" id="account" class="form-control" placeholder="輸入手機或電子郵件" aria-label="Username" aria-describedby="addon-wrapping">
                    <div id="err1" class="err"></div>
                </div>
            </div>

            <div class="signpassword">
                <div class="input-group">
                    <input id="inputpassword" type="text" class="form-control" placeholder="輸入密碼" aria-label="Username" aria-describedby="addon-wrapping">
                    <div id="err2" class="err"></div>
                </div>
            </div>

            <button id="send" type="button" class="btn-orange">會員登入</button>
            <div id="errormsg"></div>

            <div class="member-text">
                <p class="remenberid"><input class="w3-check" type="checkbox" checked="checked">
                    記住帳號</p>
                <p class="forgetpassword">忘記密碼</p>
            </div>

            <button type="button" class="abbmemberbtn" data-dismiss="modal">加入會員</button>

        </div>
    </div>


    <script src="<?= WEB_ROOT ?>/J/js/sign.js"></script>

    <script>
        const email = $('#email'),
            password = $('#password'),
            info_bar = $('#info_bar')

        function checkForm() {

            $.post('sign-api.php', {
                email: email.val(),
                password: password.val()
            }, function(data) {
                if (data.success) {
                    info_bar
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .text('登入成功');
                    location.href = 'Platinum-favorite.php';
                } else {
                    info_bar
                        .removeClass('alert-success')
                        .addClass('alert-danger')
                        .text('登入失敗');
                }
                info_bar.slideDown();

                setTimeout(function() {
                    info_bar.slideUp();
                }, 2000);
            }, 'json');
        }
    </script>
    <?php include __DIR__ . '/../parts/about.php'; ?>
</body>

</html>