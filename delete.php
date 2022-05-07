<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `puppies` where id='$id'");
	header('location:manage.php');
?>