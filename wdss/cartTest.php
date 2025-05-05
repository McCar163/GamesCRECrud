<?php
session_start();
include "product.php";

$productId = 1;
$productName = "Nintendo Switch";
$productPrice = 299.99;
$quantity = 2;


function addToCart($productId, $productName, $productPrice, $quantity) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

   
    if (isset($_SESSION['cart'][$productId])) {
     
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
    } else {
               $_SESSION['cart'][$productId] = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        );
    }
}


addToCart($productId, $productName, $productPrice, $quantity);


if (isset($_SESSION['cart'][$productId])) {
    $item = $_SESSION['cart'][$productId];
  
    if ($item['name'] === $productName && $item['quantity'] === $quantity) {
        echo "addToCart() Test Passed";
    } else {
        echo "addToCart() Test Failed";
    }
} else {
    echo "Cart is empty. Test Failed.";
}
?>
