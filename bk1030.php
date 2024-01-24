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
                <img src="images/shoes/bk1.jpeg" width="100%" id="MainImg" alt="">


            </div>

            <div class="single-pro-details">
                <h5>Home<h5>
                <h4>BK 1030</h4>
                <h2>Rs. 2700</h2>
                <select>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span class="justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore quibusdam cum modi? Alias, iure. Odit iusto officiis aperiam obcaecati necessitatibus. Nisi ratione inventore aliquid, beatae tempore harum itaque dignissimos repellendus.</span>
            </div>
            
        </section>


    </div>
    <?php
require('inc/footer.php');
?>
    </body>
</html>