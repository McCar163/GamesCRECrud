<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamescre";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Database Connection Test Passed";
    mysqli_close($conn);
} else {
    echo "Database Connection Test Failed: " . mysqli_connect_error();
}
?>
