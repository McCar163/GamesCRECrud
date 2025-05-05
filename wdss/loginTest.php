<?php
include "src/databaseConfig.php";

$username = "McCar163";

$sql = "SELECT * FROM user WHERE Username = '$username';";
$qryResult = mysqli_query($conn, $sql);

if ($qryResult && mysqli_num_rows($qryResult) > 0) {
    echo "gin Query Test Passed";
} else {
    echo "Login Query Test Failed";
}
?>
