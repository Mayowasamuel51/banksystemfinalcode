<?php

session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';
if(isset($_POST['submit'])){

	$Phone_number= trim(mysqli_real_escape_string($conn,$_POST['phone_number']));
	$Amount_to_buy = trim(mysqli_real_escape_string($conn,$_POST['amount_to_buy']));
	$Pin = trim(mysqli_real_escape_string($conn,$_POST['pin']));
	
	if(empty($Phone_number)|| empty($Amount_to_buy) || empty($Pin)){
		header('Location:\BankPro/Bankpage/ovahomepage.php? please fill the space ');
		exit();
	}

	else{
		$check_data = "SELECT  * FROM banksystem WHERE phonenumber = '".$Phone_number."' and pin_number  = '".$Pin."' ";
		$query_database = mysqli_query($conn,$check_data);
		


		if (mysqli_num_rows($query_database) > 0) {
			if ($row_data = mysqli_fetch_assoc($query_database)) {
				$_SESSION['total'] = $row_data['totalamount'];
				$_SESSION['add_card'] = $row_data['airtime'];
				if ($_SESSION['total'] >= $Amount_to_buy) {
					mysqli_begin_transaction($conn);
					$update_amount = "UPDATE banksystem SET totalamount= '".$_SESSION['total']."' - '".$Amount_to_buy."'   where pin_number= '".$Pin."'  ";
					mysqli_query($conn,$update_amount);

					$update_totalamount  = "UPDATE banksystem SET airtime = '".$Amount_to_buy."' + '".$_SESSION['add_card']."'   where pin_number= '".$Pin."'  ";
					mysqli_query($conn,$update_totalamount);
					mysqli_commit($conn);
					header('Location:\BankPro/Bankpage/ovahomepage.php? u have bought airtime ');
					exit();

				}else{
					echo "Not Enough Money";
					
				}
			}
		}else{
				echo "<h1 class='title is-size-1 has-text-warning'> Phone number or Pin does not exist </h1> ";
				exit();
			}
	}
}