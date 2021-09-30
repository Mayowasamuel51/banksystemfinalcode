<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WELCOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
<style>
	body{
		/*background-image: linear-gradient(to right top, #858484, #626262, #424141, #232323, #000000);*/
		/*background-image: linear-gradient(to right top, #f4f1ff, #bab3cf, #8278a0, #4e4173, #1b1048);*/
		background-image: linear-gradient(to right top, #9477ff, #6b5bbe, #473f80, #282546, #0a0812);
		height: 140vh;

	}

</style>


<div class="columns">
	<h1 class="title column is-offset-4-desktop pt-5 has-text-white">OVA BANK PLC USER DASHBOARD</h1>
</div>


<div class="columns ml-3 ">
	<figure class="image is-32x32">
		<image class="is-rounded " src="avater.jpeg"></image>
	</figure>
</div>

<div class="columns ml-4 mt-5">
	<div class="card column is-6">
		<header class="card-header title is-size-5 pl-4 column ">ACCOUNT BALANCE </header>
		<div class="card-content">
			<p class="is-size-5 has-text-weight-semibold pr-3">Account Name :  <?php  echo $_SESSION['username'];?></p>

			<?php
				$collect_from_database = "SELECT * FROM banksystem WHERE accountnumber ='".$_SESSION['accountnumber']."' ";
				$query_database = mysqli_query($conn,$collect_from_database);
				if($row_data = mysqli_fetch_assoc($query_database)){
					$_SESSION['totalamount'] = $row_data['totalamount'];
					echo "<p class='is-size-5 has-text-weight-semibold pr-3 pt-1' value='&#x24'>Total Balance: &#x24 ".$_SESSION['totalamount']."</p>";
				}

			?>

			<?php
				$collect_from_database = "SELECT * FROM banksystem WHERE accountnumber ='".$_SESSION['accountnumber']."' ";
				$query_database = mysqli_query($conn,$collect_from_database);
				if($row_data = mysqli_fetch_assoc($query_database)){
					$_SESSION['airtime'] = $row_data['airtime'];
					echo "<p class='is-size-5 has-text-weight-semibold pr-3 pt-1'>Total Aitime : ".$_SESSION['airtime']."</p>";
				}

			?>

			<p class="is-size-5 has-text-weight-semibold pr-3">Account Name :  <?php  echo $_SESSION['accountnumber'];?></p>

		</div>
		<div>

			<form action="">
				<button class="button is-success is-size-6 ml-4" formaction="Userairtime/airtime.php">Recharge Your Line</button>
				<button class="button is-success has-background-black is-size-6 ml-4" formaction="Transfer/transfer.php">Make Transfer</button>
			</form>


		</div>
	</div>

</div>

 <!-- second step  -->
<div class="columns ml-4">
	<div class="card mt-6">
		<header class="card-header title is-size-6">Profile Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">Account Holder :  <?php  echo $_SESSION['username'];?></p>
			<p class="is-size-5 pr-3">BVN :  <?php  echo $_SESSION['bvn'];?></p>
			<p class="is-size-5  pr-3">Phone Number :  <?php  echo $_SESSION['phonenumber'];?></p>
			<p class="is-size-5  pr-3">Birth Date :  <?php  echo $_SESSION['birthdate'];?></p>
		</div>
	</div>

	<div class="card mt-6 ml-6">
		<header class="card-header title is-size-6">Account Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">Balance :  <?php  echo $_SESSION['totalamount'];?></p>
			<p class="is-size-5 pr-3">Account Type  : Savings Account </p>
			<p class="is-size-5  pr-3">Location  :  <?php  echo $_SESSION['location'];?></p>
		
		</div>
	</div>


	<div class="card mt-6 ml-6 mb-6  pb-6">
		<header class="card-header title is-size-6">Profile Details</header>
		<div class="card-content">
			<p class="is-size-5  pr-3">Debit Card   <?php  echo $_SESSION['debitcard'];?></p>
			<p class="is-size-5 pr-3 pb-5">pin :  <?php  echo $_SESSION['pin'];?></p>
			
		</div>
	</div>




</div>


	<form action="\BankPro/logout.php" method="post">
		<button class="button is-success is-outlined mt-3 ml-5" name="logout" type="submit">logout </button>

	</form>























</body>
</html>