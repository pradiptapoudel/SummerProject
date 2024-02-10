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
<h2>
    New Password Has Been Sent to Your Mail.
</h2>
<a href="index.php" class="text-decoration-none text-dark">Click Here to Login with Your New Password</a>

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