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
    <?php require('inc/header.php'); ?>

    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "archanastores";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add product to cart
function addProductToCart($user_id, $product_id, $quantity) {
    global $conn;
    
    $sql = "INSERT INTO cart_items (cart_id, product_id, quantity, price)
            VALUES ((SELECT cart_id FROM cart WHERE user_id = $user_id), $product_id, $quantity, 
            (SELECT price FROM products WHERE product_id = $product_id))";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product added to cart successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update product quantity in cart
function updateProductQuantity($item_id, $quantity) {
    global $conn;
    
    $sql = "UPDATE cart_items SET quantity = $quantity WHERE item_id = $item_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Product quantity updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// View cart contents
function viewCart($user_id) {
    global $conn;
    
    $sql = "SELECT ci.item_id, p.name, ci.quantity, ci.price
            FROM cart_items ci
            INNER JOIN products p ON ci.product_id = p.product_id
            WHERE ci.cart_id = (SELECT cart_id FROM cart WHERE user_id = $user_id)";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Item ID: " . $row["item_id"]. " - Name: " . $row["name"]. " - Quantity: " . $row["quantity"]. " - Price: $" . $row["price"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}

// Example usage
$user_id = 1; // Example user ID
$product_id = 2; // Example product ID
$quantity = 3; // Example quantity

addProductToCart($user_id, $product_id, $quantity);

// Example usage to update quantity of an item in cart
$item_id = 1; // Example item ID
$new_quantity = 5; // New quantity
updateProductQuantity($item_id, $new_quantity);

// Example usage to view cart
viewCart($user_id);

$conn->close();
?>





<?php require('inc/footer.php'); ?>
    </body>
</html>