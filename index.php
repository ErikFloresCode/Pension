<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  
  <?php include('nav.php'); ?>

  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt=""></li>
          <li><img src="images/slide1.jpg" alt=""></li>
          <li class="mb0"><img src="images/slide2.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content page1">
    <div class="container_12">
      
      <div class="clear"></div>
      
      <div class="grid_12">
        <div class="car_wrap">
          <h2>Menu de la semana</h2>
          <a href="#" class="prev"></a><a href="#" class="next"></a>
          <ul class="carousel1">
            <li>
              <div><img src="images/page1_img1.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img2.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img4.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
                <span> Dorem ipsum dolor amet consectetur</span>
                <div class="price">45$</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <div class="bottom_block">
        <div class="grid_6">
          <h3>Follow Us</h3>
          <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
          <nav>
            <ul>
              <li class="current"><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="menu.html">Menu</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="news.html">News</a></li>
              <li><a href="contacts.html">Contacts</a></li>
            </ul>
          </nav>
        </div>
        <div class="grid_6">
          <h3>Email Updates</h3>
          <p class="col1">Join our digital mailing list and get news<br>
            deals and be first to know about events</p>
          <form id="newsletter" action="#">
            <div class="success">Your subscribe request has been sent!</div>
            <label class="email">
              <input type="email" value="Enter e-mail address" >
              <a href="#" class="btn" data-type="submit">subscribe</a> <span class="error">*This is not a valid email address.</span> </label>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include('footer.php')?>
</body>
</html>