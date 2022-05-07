<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$info=$_POST['info'];
      $gender=$_POST['gender'];
	
	mysqli_query($conn,"update `ourdogs` set name='$name', info='".htmlspecialchars($info)."', gender='$gender' where id='$id'");
	header('location:index.php');
?>