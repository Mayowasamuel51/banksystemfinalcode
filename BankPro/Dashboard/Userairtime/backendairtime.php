<?php
session_start();

include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';

if(isset($_POST['buy'])){

	$phone_number = trim(mysqli_real_escape_string($conn,$_POST['phone_number']));
	$amount_to_buy  = trim(mysqli_real_escape_string($conn,$_POST['amount']));

	if(empty($phone_number) || empty($amount_to_buy)){
		header("location:airtime.php? please fill the space ");
		exit();
	}

	else{

		$check_data = "SELECT  * FROM banksystem WHERE totalamount = '".$_SESSION['totalamount']."' and phonenumber = '".$phone_number."' ";
		$query_database = mysqli_query($conn,$check_data);

		// checking if phone number is in database 
		if (mysqli_num_rows($query_database) > 0 ) {
			if ($_SESSION['totalamount'] >= $amount_to_buy) {
				mysqli_begin_transaction($conn);
				$update_amount = "UPDATE banksystem SET totalamount= '".$_SESSION['totalamount']."' - '".$amount_to_buy."'   where username = '".$_SESSION['username']."'  ";
				mysqli_query($conn,$update_amount);

				$update_totalamount  = "UPDATE banksystem SET airtime = '".$amount_to_buy."' + '".$_SESSION['airtime']."'   where phonenumber = '".$phone_number."'  ";
				mysqli_query($conn,$update_totalamount);
				mysqli_commit($conn);
				header("location:\BankPro/Dashboard/Success/aitimesuccess.php");
				exit();




			}else{
				header("location:\BankPro/Dashboard/Error/airtimeerror.php");
				exit();
			}












			
		}else{
			echo "<h1> Phone number does not exit";
		}

	}


}