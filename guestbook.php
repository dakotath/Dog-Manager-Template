<?php
session_start();
if ($_SESSION['email'] == null) {
    header("Location: index.php", true, 301);
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
	<form action="addguestbook.php" method="post">
		<label>Message</label><input type="text" name="msg">
		<label>Submit</label><input type="submit">
		<table border="1">
			<thead>
				<th>name</th>
				<th>email</th>
				<th>message</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `guestbook`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td style="width: 500px;"><?php echo $row['name']; ?></td>
							<td style="width: 500px;"><?php echo $row['email']; ?></td>
							<td style="width: 1000px;"><?php echo $row['message']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
    </div>
</body>
</html>