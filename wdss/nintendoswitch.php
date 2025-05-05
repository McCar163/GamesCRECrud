<?php
session_start();  
?>

<!DOCTYPE html>
<html>
<head>
<title>GamesCRE</title>
<link rel="stylesheet" href="css/gamescre.css">
</head>
<body>
<a href="index.php">
<img src="images/gamescre.png" alt="logo" width="100" height="100">
<hr>   
<nav>
    <a href="index.php">Home</a> |
    <a href="login.php">Account</a> |
    <a href="basket.php">Basket</a> |
    <a href="nintendoswitch.php">Nintendo Switch</a> |
    <a href="playstation5.php">Playstation 5</a> |
    <a href="xbox.php">Xbox Series X/S</a> |
    <input type="text" placeholder="Search..">
</nav>

<h2> Nintendo Switch </h2>
<img src="images/switch.png" alt="logo" width="250" height="250">
<p>The Nintendo Switch is a Hybrid console created by Nintendo in 2017.</p>

<form method="post">
    <input type="hidden" name="product_id" value="1">
    <input type="hidden" name="product_name" value="Nintendo Switch">
    <input type="hidden" name="product_price" value="299.99">
    <input type="number" name="quantity" value="1" min="1">
    <input type="submit" name="add_to_cart" value="Add to Basket">
</form>

<?php

    include "product.php";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    addToCart($productId, $productName, $productPrice, $quantity);
    echo "<p>Product added to your basket!</p>";
    }
?>
</body>
</html>
