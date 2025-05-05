<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<title>GamesCRE - Your Basket</title>
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

<h2>Your Shopping Basket</h2>

<?php
function displayCart() {
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        $totalPrice = 0;
        
        
        foreach ($_SESSION['cart'] as $productId => $product) {
            $total = $product['price'] * $product['quantity'];
            $totalPrice += $total;
            echo "<li>
                    <strong>{$product['name']}</strong><br>
                    Price: {$product['price']}<br>
                    Quantity: {$product['quantity']}<br>
                    <a href='?remove={$productId}'>Remove</a>
                  </li>";
        }
        
        echo "<p><strong>Total Price: $totalPrice</strong></p>";
        echo "<form method='post' action='checkout.php'>
                <button type='submit'>Proceed to Checkout</button>
              </form>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}

if (isset($_GET['remove'])) {
    $productIdToRemove = $_GET['remove'];
    unset($_SESSION['cart'][$productIdToRemove]);
    header("Location: basket.php"); 
    exit;
}

displayCart();
?>
</body>
</html>
