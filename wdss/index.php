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
				<a href="create.php">Create</a> |
				<a href="read.php">Read</a> |
				<a href="update.php">Update</a> |
				<a href="delete.php">Delete</a> |
				<input type="text" placeholder="Search..">
    </nav>

	<h1>Top selling items!</h1>
	<?php
		$top_selling_items = [
    		"Nintendo Switch",
    		"Playstation 5",
    		"Xbox Series X",
    		"Xbox Series S",
    		"Joycons"
		];

		
		
		for ($i = 0; $i < count($top_selling_items); $i++) {
			echo $top_selling_items[$i] . "<br>";
		}
		?>

 

</body>
</html>