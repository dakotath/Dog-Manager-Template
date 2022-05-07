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
    <div class="container mt-5">
	<div>
		<table border="1">
			<thead>
				<th>id</th>
				<th>name</th>
				<th>image</th>
				<th>info</th>
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
							<td><?php echo $row['image']; ?></td>
							<td><?php echo $row['info']; ?></td>
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
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>id</th>
				<th>name</th>
				<th>image</th>
				<th>info</th>
				<th>color</th>
				<th>status</th>
				<th>moid</th>
				<th>faid</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('../conn.php');
					$query=mysqli_query($conn,"select * from `puppies`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['image']; ?></td>
							<td><?php echo $row['info']; ?></td>
							<td><?php echo $row['color']; ?></td>
							<td><?php echo $row['status']; ?></td>
							<td><?php echo $row['moid']; ?></td>
							<td><?php echo $row['faid']; ?></td>
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