<link rel="stylesheet" href="<?= WEB_ROOT ?>css/nav.css">
<link rel="icon" href="<?= WEB_ROOT ?>img/favicon.png">

<body class="hero-anime">

    <div class="navigation-wrap  start-header start-style" style="background-color: #002A4C;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">

                        <li class="nav-item search small pl-4 pl-md-0 ml-0 ml-md-4">
                            <img src="<?= WEB_ROOT ?>img/search.svg" alt="">
                        </li>
                        <a class="navbar-brand" href="" target="_blank"><img src="<?= WEB_ROOT ?>img/logowhite.svg" alt=""></a>
                        <div class="navslogn"><img src="<?= WEB_ROOT ?>img/navslogn.svg" alt=""></div>


                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ml-auto py-4 py-md-0">

                                <li class="nav-item search pl-4 pl-md-0 ml-0 ml-md-4">
                                    <img src="<?= WEB_ROOT ?>img/search.svg" alt="">
                                    <a class="nav-link " href="#">搜尋酒吧</a>
                                </li>

                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <img src="<?= WEB_ROOT ?>img/favorites.svg" alt="">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">我的收藏</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <img src="<?= WEB_ROOT ?>img/Clock-right.svg" alt="">
                                    <a class="nav-link" href="#">我的訂單</a>
                                </li>
                                <li class="nav-item member pl-4 pl-md-0 ml-0 ml-md-4">
                                    <img src="<?= WEB_ROOT ?>img/member.svg" alt="">
                                    <a class="nav-link" href="#">登入/註冊</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="container-fluid searcharea">
                <div class="searchform">
                    <div class="keywordbox">
                        <input class="input1" type="text" placeholder="輸入關鍵字">
                    </div>
                    <select class="area" name="" id="">
                        <option value="">選擇地區</option>
                        <option value="">萬華區</option>
                        <option value="">中正區</option>
                        <option value="">大安區</option>
                        <option value="">信義區</option>
                        <option value="">南港區</option>
                        <option value="">大同區</option>
                        <option value="">中山區</option>
                        <option value="">松山區</option>
                        <option value="">內湖區</option>
                        <option value="">士林區</option>
                        <option value="">北投區</option>
                        <option value="">文山區</option>
                    </select>
                    <select class="area" name="" id="">
                        <option value="">調酒類別</option>
                        <option value="">萬華區</option>
                        <option value="">中正區</option>
                        <option value="">大安區</option>
                        <option value="">信義區</option>
                        <option value="">南港區</option>
                    </select>
                    <select class="area" name="" id="">
                        <option value="">酒吧風格</option>
                        <option value="">萬華區</option>
                        <option value="">中正區</option>
                        <option value="">大安區</option>
                        <option value="">信義區</option>
                        <option value="">南港區</option>
                    </select>
                    <button class="searchbutton">搜尋酒吧</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Link to page
    ================================================== -->




    <script src="<?= WEB_ROOT ?>node_modules/bootstrap/js/dist/popover.js"></script>

    <script>
        // tsai
        $(document).ready(function() {
            $('body.hero-anime').removeClass('hero-anime');
            $(".search").click(function() {
                $(".slide").slideToggle();
            });
        });


        (function($) {
            "use strict";

            $(function() {
                var header = $(".start-style");
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();

                    if (scroll >= 10) {
                        header.removeClass('start-style').addClass("scroll-on");
                    } else {
                        header.removeClass("scroll-on").addClass('start-style');
                    }
                });
            });
            //Animation

            $(document).ready(function() {
                $('body.hero-anime').removeClass('hero-anime');
            });

            //Menu On Hover

            $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
                if ($(window).width() > 750) {
                    var _d = $(e.target).closest('.nav-item');
                    _d.addClass('show');
                    setTimeout(function() {
                        _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                    }, 1);
                }
            });
        })
    </script>

</body>