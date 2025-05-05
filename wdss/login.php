<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
    <br>
    <br>
    <h2> Create an account </h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter Username" required><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Enter phone" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter Address" required><br>

        <input type="submit" name="Create" value="Create">
    </form>





    <h2> Login </h2>
    <form method="POST" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter Username" required><br>

        <input type="submit" name="login" value="Login">
    </form>
    <?php
    session_start();

    include "src/databaseConfig.php";

    if (isset($_POST['Create'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        
        $sql = "INSERT INTO user (Username, Email, Phone, Address) VALUES ('$username', '$email', '$phone', '$address')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<p>Account created successfully! You can now log in.</p>";
        } else {
            echo "<p style='color: red;'>Error creating account: " . mysqli_error($conn) . "</p>";
        }
    }
    

    if (isset($_POST['login'])) {
        
       

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $sql = "SELECT * FROM user WHERE Username = '$username';";
        $qryResult = mysqli_query($conn, $sql);

        if (mysqli_num_rows($qryResult) > 0) {
            
            $row = mysqli_fetch_assoc($qryResult);
                $_SESSION['username'] = $row['Username'];
                echo "<p>Login successful! Welcome, " . $row['Username'] . ".</p>";
            } else {
                echo "<p style='color: red;'>Invalid username or password!</p>";
            }
        } else {
            echo "<p style='color: red;'>No user found with that username!</p>";
        }
    ?>

</body>
</html>