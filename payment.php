<?php

include_once('config.php');
?>
<?php

    $Fname= $_POST['fname'];
	$Lname=$_POST['lname'];
	$cardNum= $_POST['cnum'];
	$cardOwner= $_POST['chn'];
	$cardEx= $_POST['cexpiry'];
	$cardCVC= $_POST['cc-cvc'];
	$Amount=$_POST['amount'];
	$Email= $_POST['cexpiry'];
	
	$send_to_db="insert into payment(Payment_id,F_name,L_name,cardNo,card_owner,cardExpiry,cardCVC,Amount_to_pay,Email_Add)values('','{$Fname}','{$Lname}','{$cardNum}','{$cardOwner}','{$cardEx}','{$cardCVC}','{$Amount}','{$Email}')";
	echo"send_to_db";
        if (mysqli_query($conn, $send_to_db)){
	     echo "<script>alert ('Amount payed successfully!!!')</script>";
		 Header("Location:success.html");
	     
        }
        else{
            echo "<script>alert ('Cannot pay!!!')</script>";
        }
		
		
		mysqli_close($conn);

?>
	
