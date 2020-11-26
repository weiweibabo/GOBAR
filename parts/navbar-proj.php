<?php
if (!isset($pageName)) {
    $pageName = '';
}
?>
<style>
    .navbar .nav-item.active {
        border: #005cbf 2px solid;
        border-radius: 10px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $pageName === 'product-list' ? 'active' : '' ?>">
                    <a class="nav-link" href="product-list.php">商品列表</a>
                </li>
                <li class="nav-item <?= $pageName === 'ab-insert' ? 'active' : '' ?>">
                    <a class="nav-link" href="cart-list.php">購物車
                        <span class="badge badge-pill badge-danger count-badge">0</span>
                    </a>

                </li>
                <li class="nav-item <?= $pageName === 'product-list-ajax' ? 'active' : '' ?>">
                    <a class="nav-link" href="product-list-ajax.php">商品列表ajax</a>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <?php if (isset($_SESSION['user'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['user']['nickname'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">修改會員資料</a>
                            <a class="dropdown-item" href="#">修改密碼</a>
                            <a class="dropdown-item" href="order-history.php">歷史訂單</a>
                        </div>
                    <li class="nav-item <?= $pageName === 'ab-insert' ? 'active' : '' ?>">
                        <a class="nav-link" href="user-logout.php">登出</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item <?= $pageName === 'ab-list' ? 'active' : '' ?>">
                        <a class="nav-link" href="user-login.php">登入</a>
                    </li>
                    <li class="nav-item <?= $pageName === 'ab-insert' ? 'active' : '' ?>">
                        <a class="nav-link" href="">註冊</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<script>
    const count_badge = $('.count-badge');

    function countCart(cart) {
        let count = 0;
        for (let i in cart) {
            count += cart[i].quantity * 1;
        }
        count_badge.html(count);
    }

    $.get('handle-cart.php', function(data) {
        console.log(data);
        countCart(data.cart);
    }, 'json');
</script>