<?php
include_once('config.php');
?>
<?php


    $Firstname=$_POST['firstname'];
	$Lastname=$_POST['lastname'];
	$Email=$_POST['email'];
	$Country=$_POST['country'];
	$Message=$_POST['subject'];
	
	
	$send_to_db="insert into contact(Contact_id,First_name,Last_name,Email,Country,Message)values('','{$Firstname}','{$Lastname}','{$Email}','{$Country}','{$Message}')";
	
	if (mysqli_query($conn, $send_to_db)){
		  echo "<script>alert ('Message inserted successfully!!!')</script>";
	     Header("Location:contact.html");
        }
        else{
            echo "<script>alert ('Error in inserting Message!!!')</script>";
        }
		

mysqli_close($conn);


?>
	
