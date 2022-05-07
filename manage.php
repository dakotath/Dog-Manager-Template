<?php
session_start();
if ($_SESSION['email'] != file_get_contents("site_config/admin_email.txt")) {
    header("Location: login", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title>Home Title</title>
</head>

<body>
    <?php include 'header.php';?> 
    <div class="container mt-5">
<?php
include('conn.php');
$name=$_POST['name'];
$image="";
$info=$_POST['info'];
$gender=$_POST['gender'];
if($name == null)
{

}
else
{
$target_dir = "img/dogs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
    $sql = "INSERT INTO ourdogs (name, image, info, gender) VALUES ('$name', 'img/dogs/$image', '$info', '$gender')";
    if ($mysqli->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>
		<font color="grey" size="20">Our Dogs</font>
		<hr size="10">
		<form method="POST" action="ourdogsadd.php" enctype="multipart/form-data">
  			Select image to upload:
			<input type="file" value="Chose File" name="file" id="file">
  			<br>
			<label>id:</label><input type="text" name="id">
			<label>name:</label><input type="text" name="name">
			<label>gender:</label><input type="text" name="gender">
			<input type="submit" name="add">
		</form>
	<div>
		<table border="1">
			<thead>
				<th>id</th>
				<th>name</th>
				<th>gender</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `ourdogs`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td>
								<a href="editourdogs.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="deleteourdogs.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
		<br><br>
		<font color="grey" size="20">The Puppies</font>
		<hr size="10">
		<form method="POST" action="add.php" enctype="multipart/form-data">
  			Select image to upload:
			<input type="file" value="Chose File" name="file" id="file">
  			<br>
			<label>id:</label><input type="text" name="id">
			<label>name:</label><input type="text" name="name">
			<label>info:</label><input type="text" name="info">
			<label>color:</label><input type="text" name="color">
			<br>
			<label>status:</label><input type="text" name="status">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>id</th>
				<th>name</th>
				<th>info</th>
				<th>color</th>
				<th>status</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `puppies`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['info']; ?></td>
							<td><?php echo $row['color']; ?></td>
							<td><?php echo $row['status']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</form>
    </div>
    <script href="js/bootstrap.min.js"></script>
</body>
</html>