<?php
/**
* Use an HTML form to edit an entry in the
* users table.
*
*/
require "common.php";
if (isset($_POST['submit'])) {
try {
require_once 'src/DBconnect.php';
$user =[
"UserID" => escape($_POST['UserID']),
"Username" => escape($_POST['Username']),
"Email" => escape($_POST['Email']),
"Phone" => escape($_POST['Phone']),
"Address" => escape($_POST['Address']),
];
$sql = "UPDATE user
SET UserID = :UserID,
Username = :Username,
Email = :Email,
Phone = :Phone,
Address = :Address
WHERE UserID = :UserID";
$statement = $connection->prepare($sql);
$statement->execute($user);
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}
if (isset($_GET['id'])) {
try {
require_once 'src/DBconnect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE UserID = :UserID";
$statement = $connection->prepare($sql);
$statement->bindValue(':UserID', $id);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
} else {
echo "Something went wrong!";
exit;
}
?>
<?php require "templates/header.php"; ?>
<?php if (isset($_POST['submit']) && $statement) : ?>
<?php echo escape($_POST['Username']); ?> successfully updated.
<?php endif; ?>
<h2>Edit a user</h2>
<form method="post">
<?php foreach ($user as $key => $value) : ?>
<label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
<input type="text" name="<?php echo $key; ?>" id="<?php echo $key;
?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'UserID' ?
'readonly' : null); ?>>
<?php endforeach; ?>
<input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to home</a>
<?php require "templates/footer.php"; ?>