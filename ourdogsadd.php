<?php
if(isset($_POST["add"])) {
	include('conn.php');
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$info=$_POST['info'];
	$gender=$_POST['gender'];
        $filename       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($filename) and !empty($filename)){
            $location = 'img/dogs/';      
            if(move_uploaded_file($temp_name, $location.$filename)){
                echo 'File uploaded successfully';
		    mysqli_query($conn,"insert into `ourdogs` (id,name,image,info,gender) values ('$id','$name','$location$filename','".htmlspecialchars($info)."','$gender')");
		    header("Location: manage.php");
            }
        } else {
            echo 'You should select a file to upload !!';
        }
    }	
?>