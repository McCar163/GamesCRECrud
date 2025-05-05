<?php
/**
* Function to query information based on
* a parameter: in this case, Email.
*
*/
if (isset($_POST['submit'])) {
try {
require "common.php";
require_once 'src/DBconnect.php';
$sql = "SELECT *
FROM user
WHERE Email = :Email";
$Email = $_POST['Email'];
$statement = $connection->prepare($sql);
$statement->bindParam(':Email', $Email, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}
require "templates/header.php";
if (isset($_POST['submit'])) {
if ($result && $statement->rowCount() > 0) {
?>
<h2>Results</h2>
<table>
<thead>
<tr>
<th>Username</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>UserID</th>
</tr>
</thead>
<tbody>
<?php foreach ($result as $row) { ?>
<tr>
<td><?php echo escape($row["Username"]); ?></td>
<td><?php echo escape($row["Email"]); ?></td>
<td><?php echo escape($row["Phone"]); ?></td>
<td><?php echo escape($row["Address"]); ?></td>
<td><?php echo escape($row["UserID"]); ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
> No results found for <?php echo escape($_POST['Email']); ?>.
<?php }
} ?>
<h2>Find user based on Email</h2>
<form method="post">
<label for="Email">Email</label>
<input type="text" id="Email" name="Email">
<input type="submit" name="submit" value="View Results">
</form>
<a href="index.php">Back to home</a>
<?php require "templates/footer.php"; ?>    