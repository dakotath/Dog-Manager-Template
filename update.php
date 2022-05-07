<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$info=$_POST['info'];
      $color=$_POST['color'];
      $status=$_POST['status'];
	
	mysqli_query($conn,"update `puppies` set name='$name', info='".htmlspecialchars($info)."', color='$color', status='$status' where id='$id'");
	header('location:index.php');
?>