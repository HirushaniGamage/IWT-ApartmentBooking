<?php
    include_once('config.php');
?>

<?php

	$Fname=$_POST['fname'];
	$Lname=$_POST['lname'];
	$Bdate=$_POST['bdate'];
	$Email =$_POST['emailAdd'];
	$Mobile=$_POST['mobile'];
	$Address=$_POST['addr'];
	$Mariatal=$_POST['mname'];
	$City=$_POST['cty'];
	$Province=$_POST['prvnce'];
	$Postal=$_POST['code'];
	$Occupation=$_POST['ocptn'];
	$Experience=$_POST['exp'];
	$monthlyincome=$_POST['mincome'];
	$Amount=$_POST['amount'];
	$DownPayment=$_POST['damount'];
	$Monthlyrent=$_POST['mrent'];
	$comment=$_POST['cmnt'];
	
	 $send_to_db="insert into loan(Loan_id ,First_name,Last_name,Birth_Date,Email,MobileNo,Address,Mariatal_status,City,Province,Postal/code,Occupation,Exp_years,Monthly_income,Apart_amount,Down_payment,Monthly_rent,Comment)values('','{$Fname}',' {$Lname}','{$Bdate}',' {$Email}','{$Mobile}',' {$Address}',' {$Mariatal}','{$City}','{$Province}',' {$Postal}',' {$Occupation}','{$Experience}','{$monthlyincome}','{$Amount}','{$DownPayment}','{$Monthlyrent}','{$comment}')"; 

	echo"$send_to_db";

        if (mysqli_query($conn, $send_to_db)){
	     echo "<script>alert ('Payment done successfully!!!')</script>";
	     Header("Location:success.html");
        }
        else{
            echo "<script>alert ('Error in payment!!!')</script>";
        }
	mysqli_close($conn);
	?>
