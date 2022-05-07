<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `ourdogs` where id='$id'");
	header('location:manage.php');
?>