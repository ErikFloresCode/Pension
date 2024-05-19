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
                <div class="col1 upp"> <a href="#">Lunes</a></div>
                <span> Sopa de Arroz y Segundo: Mondongo</span>
                <div class="price">13 Bs</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img2.jpg" alt="">
                <div class="col1 upp"> <a href="#">Martes</a></div>
                <span> Sopa de mani y Segundo: Revuelto</span>
                <div class="price">13 Bs</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Miercoles</a></div>
                <span>  Sopa de trigo y Segundo: Sajta con arroz</span>
                <div class="price">13 Bs</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img4.jpg" alt="">
                <div class="col1 upp"> <a href="#">Jueves</a></div>
                <span> Sopa de fideo y Segundo: Pique Macho</span>
                <div class="price">13 Bs</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Viernes</a></div>
                <span> Sopa de verduras y Segundo: Ckocko </span>
                <div class="price">13 Bs</div>
              </div>
            </li>
            <li>
              <div><img src="images/page1_img3.jpg" alt="">
                <div class="col1 upp"> <a href="#">Sabado</a></div>
                <span> Sopa de maruchan y Segundo: Chorizo</span>
                <div class="price">13 Bs</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>

      <?php include('Redes.php')?>

      <div class="clear"></div>
    </div>
  </div>
</div>
<?php include('footer.php')?>
</body>
</html>