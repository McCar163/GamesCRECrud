<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pull from DB</title>
</head>
<body>


<?php

include "databaseConfig.php";
include "code_sampleLAB6.PHP";

$sql = "SELECT * FROM user;";
$qryResult = mysqli_query($conn, $sql);

$userA = new User();

if (mysqli_num_rows($qryResult) > 0) {
    while ($row = mysqli_fetch_assoc($qryResult)) {
		
        $userA->setUserName($row["Username"]);
        $userA->setUserEmail($row["Email"]);
        $userA->setUserNumber($row["Phone"]);
		
        $userA->setUserAddress($row["Address"]);
        $userA->displayUser(); 
    }
} 
?>
</body>
</html>