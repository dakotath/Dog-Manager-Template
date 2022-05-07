<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * FROM `ourdogs` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updateourdogs.php?id=<?php echo $id; ?>">
		<label>name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<label>info:</label><input type="text" value="<?php echo $row['info']; ?>" name="info">
	      <label>gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="gender">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>