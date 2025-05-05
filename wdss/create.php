
<?php
if (isset($_POST['submit'])) {
require "common.php";
try {
require_once 'src/DBconnect.php';
$new_user = array(
"Username" => escape($_POST['Username']),
"Email" => escape($_POST['Email']),
"Phone" => escape($_POST['Phone']),
"Address" => escape($_POST['Address']),
);
$sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"user",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
);
$statement = $connection->prepare($sql);
$statement->execute($new_user);
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}
require "templates/header.php";
if (isset($_POST['submit']) && $statement){
echo $new_user['Username']. ' successfully added';
}
?>
<h2>Add a user</h2>
<form method="post">
<label for="Username">Username</label>
<input type="text" name="Username" id="Username">
<label for="Email">Email</label>
<input type="text" name="Email" id="Email">
<label for="Phone">Phone</label>
<input type="text" name="Phone" id="Phone">
<label for="Address">Address</label>
<input type="text" name="Address" id="Address">
<input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to home</a>
<?php include "templates/footer.php"; ?>