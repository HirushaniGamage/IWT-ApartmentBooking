<?php

include_once('config.php');
?>
<?php

        $date= $_POST['date'];
	$customername=$_POST['cname'];
	$cashcheque= $_POST['cc'];
	$amount= $_POST['amnt'];
	$chequeno=$_POST['cno'];
	$purpose= $_POST['purpose'];

	
	
	
	$send_to_db="insert into cashPayment(cash_id,Date,Customer_name,Cash_cheque,Amount,Cheque_no,Purpose)values('','{$date}','{$customername}','{$cashcheque}','{$amount}','{$chequeno}','{$purpose}')";

        if (mysqli_query($conn, $send_to_db)){
	     echo "<script>alert ('Payed successfully!!!')</script>";
	     header("Location:success.html");
        }
        else{
            echo "<script>alert (' Invalid Payment!!!')</script>";
        }
		
		
		mysqli_close($conn);

?>