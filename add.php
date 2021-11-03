<?php
include_once('config.php');
?>
<?php


    $Aname=$_POST['fname'];
	$Oname=	 $_POST['lname'];
	$Address= $_POST['address'];
	$Atype=	$_POST['type'];
	
	$Afloor=$_POST['floor'];
	
	$Aroom=	$_POST['room'];
	
	$Awashroom=	$_POST['washroom'];
	$Ades=	 $_POST['subject'];
	
	
	$send_to_db="insert into addAdvertisement(Apart_id,Apart_name,Owner_name,Address,A_type,A_floor,A_room,A_washroom,A_Description)values('','{$Aname}','{$Oname}','{$Address}','{$Atype}','{$Afloor}','{$Aroom}','{$Awashroom}','{$Ades}')";

        if (mysqli_query($conn, $send_to_db)){
		  echo "<script>alert ('Record inserted successfully!!!')</script>";
	     header("Location:Homepage.html");
        }
        else{
            echo "<script>alert ('Error in inserting recording!!!')</script>";
        }
		

mysqli_close($conn);
?>