<?php
$conn = mysqli_connect("localhost", file_get_contents("site_config/databaseuser.txt"), file_get_contents("site_config/databasepassword.txt"),file_get_contents("site_config/databasename.txt"));
$mysqli = new mysqli("localhost", file_get_contents("site_config/databaseuser.txt"), file_get_contents("site_config/databasepassword.txt"), file_get_contents("site_config/databasename.txt"));
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>