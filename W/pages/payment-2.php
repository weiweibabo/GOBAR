<?php $title = '付款成功頁' ?>

<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php include __DIR__ . '/../../parts/html-head.php'; ?>

<link rel="stylesheet" href="../css/payment-2.css" />

<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

    
   
    <title>Payment-2</title>
  </head>

  <body>
    <header></header>
    <div class="web golden-line1"></div>
    <div class="web golden-line2"></div>

    <div class="container-fluid">
      <div class="glass-position">
        <div class="progress-area">
          <div class="progress-line">
            <p>確認中</p>
          </div>
          <div class="progress-line">
            <p>付款中</p>
          </div>
          <div class="progress-line">
            <p>已完成</p>
          </div>
        </div>

        <div class="glass">
          <img
            src="../img/progress-line3.png"
            alt=""
            style="position: relative"
          />
          <div>
            <div class="animate-position">
              <span class="top"></span>
            </div>
            <div class="animate-position1">
              <span class="line"></span>
            </div>
            <div class="animate-position2">
              <span class="fix-yellow"></span>
            </div>
            <div class="animate-position3">
              <span class="fix-yellow"></span>
            </div>
            <div class="animate-position4">
              <span class="fix-line"></span>
            </div>
          </div>
        </div>
      </div>
      <!-- phone 勾勾  start -->
      <div class="phone success-area col-xl-5 col-12">
        <svg height="325" width="325">
          <circle
            class="circle"
            cx="205"
            cy="160"
            r="120"
            fill="#fff"
            stroke="#FF8D00"
            stroke-width="15"
            transform="rotate(-90 200 200)"
            stroke-linecap="round"
          />
          <polyline
            class="tick"
            points="87,214 140,270 246,150"
            fill="none"
            stroke="#FF8D00"
            stroke-width="18"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>

        <p class="success-text1 successful text-40B">付款成功</p>

        <p class="success-text2 successful text-30L">
          (將於10秒內自動跳轉至訂位資訊頁)
        </p>
      </div>

      <!--   phone 勾勾  end  -->

      <div class="row leftarea mt-5">
        <div class="info col-xl-5 col-10">
          <div class="shop-info col-12">
            <p class="shop-name title-40M">安慰劑 Placebo Taipei</p>
            <p class="address text-20">地址 : 台北市信義區基隆路二段83號</p>
            <p class="phone-number text-20">電話 : 02 8732 2345</p>
          </div>
          <div class="order-info text-30L">
            <p>訂位日期 : 2020/12/18</p>
            <p>訂位時段 : 20 : 00</p>
            <p>訂位人數 : 8 位</p>
            <p>訂位姓名 : 王曉明 先生</p>
            <p>連絡電話 : 0912345678</p>
            <p>電子信箱 : aaa@gmail.com</p>
          </div>
        </div>
        <!-- web 勾勾 -->
        <div class="web success-area col-xl-5 col-12">
          <svg height="400" width="400">
            <circle
              class="circle"
              cx="200"
              cy="200"
              r="160"
              fill="#fff"
              stroke="#FF8D00"
              stroke-width="20"
              transform="rotate(-90 200 200)"
              stroke-linecap="round"
            />
            <polyline
              class="tick"
              points="88,214 173,284 304,138"
              fill="none"
              stroke="#FF8D00"
              stroke-width="24"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>

          <p class="successful text-40B">付款成功</p>

          <p class="successful text-30L">(將於10秒內自動跳轉至訂位資訊頁)</p>
        </div>
      </div>
      <!--  -->
    </div>

    <footer></footer>
  </body>
</html>