<?php
session_start();


// Test 1: Validate Phone Number
function validatePhoneNumber($phone) {
    if (!empty($phone) && strlen($phone) == 10) {
        echo "Test 2: Phone number is valid.<br>";
    } else {
        echo "Test 2: Invalid phone number. Must be 10 digits.<br>";
    }
}

// Test 2: Validate Address
function validateAddress($address) {
      if (!empty($address) && strlen($address) >= 10) {
        echo "Test 3: Address is valid.<br>";
    } else {
        echo "Test 3: Invalid address. Address must be at least 10 characters long.<br>";
    }
}

// Test 3: Validate Quantity 
function validateQuantity($quantity) {
      if (filter_var($quantity, FILTER_VALIDATE_INT) && $quantity > 0) {
        echo "Test 4: Quantity is valid.<br>";
    } else {
        echo "Test 4: Invalid quantity. Must be a positive integer greater than 0.<br>";
    }
}

// Test 4: Validate Product Price 
function validateProductPrice($price) {
       if (filter_var($price, FILTER_VALIDATE_FLOAT) && $price > 0) {
        echo "Test 5: Product price is valid.<br>";
    } else {
        echo "Test 5: Invalid product price. Must be a positive number.<br>";
    }
}
 
$phone = "1234567890";        
$address = "123 Test Street"; 
$quantity = 2;               
$price = 49.99;             

validatePhoneNumber($phone);
validateAddress($address);
validateQuantity($quantity);
validateProductPrice($price);

?>
