<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archana Stores</title>
    <?php
    require('inc/link.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel = "icon" href ="images/logo.png" type = "image/x-icon">
</head>
<body class= bg-light>
<?php
require('inc/header.php');
?>


<!-- Carousel -->
<div class="container-fluid">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/15.png" class="image w-100 d-block"id="a" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block"id="b"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block" id="c"/>
      </div>
    </div>
  </div>
</div>
<!-- End of Carousel -->

      <!-- Shoes Lists-->
      <h2 class="mt-5 pt-4 mb-4 mt-3 text-center fw-bold h-font">BRANDS AVAILABLE</h2>
      <a href="http://localhost/summerproject/goldstar.php" class="text-dark text-decoration-none"><div class="container">
        <div class=" row">
            <div class="card border-0 shadow mb-2" style="width: 18rem; max-width:350px; margin: auto;">
              <img src="images/shoes/1.png" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><center>GoldStar</center></h5>
                <h6><center>Rs.2700</center></h6>
                <div class="rating mb-4">
                  <center>
                  <h6 class="mb-1">Rating: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></h6>
                </center>
                </div>
              </div>
              </a>
            </div>
           
            <div class="card border-0 shadow mb-2" style="width: 18rem; max-width:350px; margin: auto;">
            <a href="http://localhost/summerproject/caliber.php" class="text-dark text-decoration-none">
            <img src="images/shoes/2.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title mb-2"><center>Caliber</center></h5>
              <h6><center>Rs.3000</center></h6>
              <div class="rating mb-4">
                <center>
                <h6 class="mb-1">Rating: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></h6>
              </center>
              </div>
            </div>
            </a>
          </div>
        

        <div class="card border-0 shadow mb-2" style="width: 18rem; max-width:350px; margin: auto;">
        <a href="http://localhost/summerproject/blackhorse.php" class="text-dark text-decoration-none">
          <img src="images/shoes/4.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title mb-2"><center>BlackHorse</center></h5>
            <h6><center>Rs.2999</center></h6>
            <div class="rating mb-4">
              <center>
              <h6 class="mb-1">Rating: <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></h6>
            </center>
            </div>
          </div>
        </a>
        </div>
      
    </div>
  </div>
  <div class="container-fluid bg-white mt-5 mb-5">
    <div class="row">
      <h3 class="loc_us h-font fw-bold fs-3 mb-3 mt-3">Locate Us</h3>
        <div class="col-lg-4 p-4">
          </div>
            <iframe class="col-lg-4 mb-4 mt-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.867444462679!2d88.05064597603136!3d26.652726271213968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5b102dec838e5%3A0x5145994ff933e987!2sArchana%20Readymade%20Store!5e0!3m2!1sen!2snp!4v1703853258915!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </div>
  </div>
<?php
require('inc/footer.php');
?>

            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <script>
        var swiper = new Swiper("swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay:{
            delay: 3000,
            disableOnInteraction: false,
          }
        });
      </script>
</body>
</html>