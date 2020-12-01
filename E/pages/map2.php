<?php include __DIR__ . '/../../parts/config.php'; ?>
<?php include __DIR__ . '/../../parts/html-head.php'; ?>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>

<link rel="stylesheet" href="../css/map2.css" />
<link rel="stylesheet" href="../js/map.js" />
<?php include __DIR__ . '/../../parts/scripts.php'; ?>
<?php include __DIR__ . '/../../parts/navbar.php'; ?>

<header></header>

<body>
  <section>
    <div class="golden-line d-flex">
      <div class="left col-xl-3 col-sm-6">
        <div class="dropdown-all d-flex">
          <div class="dropdown">
            <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              依價位
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">由高至低</a>
              <a class="dropdown-item" href="#">由低至高</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              依人氣
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">由高至低</a>
              <a class="dropdown-item" href="#">由低至高</a>
            </div>
          </div>
        </div>
        <div class="search-all">
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>

          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>

          <div class="search">
            <div class="pic">
              <img src="../img/Attic01.jpg" alt="" />
            </div>
            <div class="name-like d-flex justify-content-between">
              <div class="name">
                <h2>AHA Saloon</h2>
              </div>
              <div class="like">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.07" height="37.42" viewBox="0 0 41.07 37.42">
                  <path id="Path_848" data-name="Path 848" d="M20.535,37.42C9.494,29.948,3.7,23.151,1.328,17.463-5.035,2.217,13.138-5.073,20.535,3.926c7.4-9,25.57-1.709,19.208,13.536C37.368,23.151,31.577,29.948,20.535,37.42Z" fill="#fff" />
                </svg>
              </div>
            </div>
            <div class="address">
              <p>忠孝東路四段223巷49弄1號</p>
            </div>
            <div class="star-price d-flex justify-content-between">
              <div class="star d-flex">
                <svg id="Rating" xmlns="http://www.w3.org/2000/svg" width="105.368" height="16.683" viewBox="0 0 105.368 16.683">
                  <path id="_5" data-name="5" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(87.807 0)" fill="#fff" />
                  <path id="_4" data-name="4" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(65.855 0)" fill="#fff" />
                  <path id="_3" data-name="3" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(43.904 0)" fill="#fff" />
                  <path id="_2" data-name="2" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(21.952 0)" fill="#fff" />
                  <path id="_1" data-name="1" d="M8.781,13.408l5.426,3.275-1.44-6.173,4.794-4.153-6.313-.536L8.781,0,6.313,5.822,0,6.357,4.794,10.51l-1.44,6.173Z" transform="translate(0 0)" fill="#fff" />
                </svg>
              </div>
              <div class="star-num">
                <p>4.7</p>
              </div>
              <div class="price">
                <h2>$350起</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="right col-xl-9 col-sm-6">
        <div id="app" class="container">
          <div id="map" class="google-api embed-responsive embed-responsive-16by9">
          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: {
          lat: 25.0332560350277,
          lng: 121.54363972016898,
        },
        zoom: 18,
      });
      eqfeed_callback(jsonData)
    }
    let jsonData = [{
        "coordinates": [25.03325497600624, 121.54298245152613]
      },
      {
        "coordinates": [25.033575768393753, 121.54398559766761]
      },
      {
        "coordinates": [25.033218528659557, 121.54454621428782]
      },
      {
        "coordinates": [25.034236798873355, 121.54350283501232]
      },
      {
        "coordinates": [25.03364986243063, 121.54486096965724]
      }
    ];

    const eqfeed_callback = function(results) {
      for (let i = 0; i < results.length; i++) {
        const coords = results[i].coordinates;
        const latLng = new google.maps.LatLng(coords[0], coords[1]);
        new google.maps.Marker({
          position: latLng,
          icon: {
            url: '../../J/Gobar-svg-png/SVG/map-bar.svg',
            scaledSize: new google.maps.Size(50, 60)
          },
          animation: google.maps.Animation.BOUNCE,
          map: map,
        });
      }
    };
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzWsl0DRqMvWAZzlfqJyoNJYS6AjaFBU8&callback=initMap"></script>
</body>
<?php include __DIR__ . '/../../parts/about.php'; ?>

</html>