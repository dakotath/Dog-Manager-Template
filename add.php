<?php
if(isset($_POST["add"])) {
	include('conn.php');
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$info=$_POST['info'];
	$color=$_POST['color'];
	$status=$_POST['status'];
	$moid=$_POST['moid'];
	$faid=$_POST['faid'];
        $filename       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($filename) and !empty($filename)){
            $location = 'img/dogs/';      
            if(move_uploaded_file($temp_name, $location.$filename)){
                echo 'File uploaded successfully';
		    mysqli_query($conn,"insert into `puppies` (id,name,image,info,color,status,moid,faid) values ('$id','$name','img/dogs/$filename','".htmlspecialchars($info)."','$color','$status', '$moid', '$faid')");
            }
        } else {
            echo 'You should select a file to upload !!';
        }
    }	
?>