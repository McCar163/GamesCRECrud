<?php
require_once 'code_sampleLAB6.php';  

$user = new User();
$user->setUserName("TestUser");
$user->setUserEmail("TestUser@example.com");
$user->setUserNumber("1234567890");
$user->setUserAddress("123 Test");


if ($user->getUserName() === "TestUser") {
    echo "PASS: Username is correct.<br>";
} else {
    echo "FAIL: Username is incorrect.<br>";
}

if ($user->getUserEmail() === "TestUser@example.com") {
    echo "PASS: Email is correct.<br>";
} else {
    echo "FAIL: Email is incorrect.<br>";
}

if ($user->getUserNumber() === "1234567890") {
    echo "PASS: Phone number is correct.<br>";
} else {
    echo "FAIL: Phone number is incorrect.<br>";
}

if ($user->getUserAddress() === "123 Test") {
    echo "PASS: Address is correct.<br>";
} else {
    echo "FAIL: Address is incorrect.<br>";
}
?>
