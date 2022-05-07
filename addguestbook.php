<?php include 'header.php';?>
<?php
include('conn.php');
$query = mysqli_query($mysqli,"SELECT fullname FROM users WHERE email = '".$_SESSION['email']."'");
$row=mysqli_fetch_array($query);
$name = $row['fullname'];
$message=$_POST['msg'];
mysqli_query($mysqli,"insert into `guestbook` (name,email,message) values ('$name', '".$_SESSION['email']."', '".htmlspecialchars($message)."')");
header('location: guestbook.php');