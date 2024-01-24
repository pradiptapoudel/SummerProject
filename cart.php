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
        <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    </head>
    <body>
    <?php
require('inc/header.php');
?>
        <section id="cart" class="section-p1">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="../images/traee2.avif" alt=""></td>
                        <td>Trae Young 2</td>
                        <td>Rs11000</td>
                        <td><input type="number" value="1"></td>
                        <td>Rs11000</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="../images/trae3.avif" alt=""></td>
                        <td>Trae Young 3</td>
                        <td>Rs10000</td>
                        <td><input type="number" value="1"></td>
                        <td>Rs10000</td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                        <td><img src="../images/dame.avif" alt=""></td>
                        <td>Dame 7</td>
                        <td>Rs9999</td>
                        <td><input type="number" value="1"></td>
                        <td>Rs9999</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="cart-add" class="section-p1">
            </div>
            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <Td>Cart Subtotal</Td>
                        <td>Rs30000</td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>Rs30000</strong></td>
                    </tr>
                </table>
                <button class="normal">Proceed to checkout</button>
            </div>
        </section>
        <?php
require('inc/footer.php');
?>
    </body>
</html>