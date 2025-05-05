<?php
session_start();

$_SESSION['cart'] = [
    1 => ['name' => 'Nintendo Switch', 'price' => 299.99, 'quantity' => 1]
];


$productIdToRemove = 1;
unset($_SESSION['cart'][$productIdToRemove]);

if (!isset($_SESSION['cart'][$productIdToRemove])) {
    echo "Cart Remove Test Passed";
} else {
    echo "Cart Remove Test Failed";
}
?>
