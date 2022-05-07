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
$query = "SELECT * FROM puppies ORDER BY ID";
$sql = "SELECT * FROM puppies";
$result = $mysqli->query($query);
$row = $result->fetch_array(MYSQLI_NUM);

/* associative array */
if ($result=mysqli_query($mysqli,$sql)) {
    $rowcount=mysqli_num_rows($result);
}
$rc = $result->num_rows;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	  $info = $row['info'];
	  $status = $row['status'];
	  $color = $row['color'];
        echo "<hr size='10'>" . $row["gender"] . " - <img src='" . $row["image"]. "'></img>";
	  echo "<p>" . $info. "</p><p><font color='".$color."'>".$status."</font></p>";
    }
} else {
    echo "There are currently no puppies..";
}
?>
    </div>
    <script href="js/bootstrap.min.js"></script>
</body>

</html>