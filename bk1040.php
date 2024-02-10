<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial scale=1.0">
        <title>Archana Stores</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnet" href="http://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <body>
    <?php
        require('inc/header.php');
    ?>

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <br>
                <div class="card border-0 shadow mb-2" style="width: 29rem; height: 29rem; margin: auto;">
                    <img src="images/shoes/bk2.jpeg" width="100%" id="MainImg">
                </div>
            </div>
            <div class="single-pro-details">
                <h3 class="h-font mt--4">BlackHorse</h3>  
                <br>
                <h2>BK 1040</h2>
                <h4>Rs. 3000</h4>
                <h5>Select your Size</h5>
                <select>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                </select>
                <form method=post action=cart/index.php>
                    <button class="add">Add to Cart</button>
                </form>
                <br>
                <button class="normal">Buy Now

                </button>
                <h4 class="h-font">Product Details</h4>
                <span><p class="justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore quibusdam cum modi? Alias, iure. Odit iusto officiis aperiam obcaecati necessitatibus. Nisi ratione inventore aliquid, beatae tempore harum itaque dignissimos repellendus.</p></span>
            </div>
        </section>


    </div>
    <?php
require('inc/footer.php');
?>
    </body>
</html>