<?php  
session_start()
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Deposit</title>
</head>
<body>
<style>
      body{
      	background-image: linear-gradient(to right top, #5743be, #53439e, #4d427e, #46405f, #3e3d41);
      }
	.tops{
			margin-top: 100px;
		}
</style>
<div class="columns">
	<div class="column is-offset-4">
		<h1 class="title has-text-white  pt-4">OVA BANK PLC </h1>
	</div>
</div>

<form action="\BankPro/Transactiobackend/depositbackend.php" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-5 has-text-white">Account Number</label><br>
			<input type="text" class="input is-outlined column is-5 " name="account_number"><br>

			<label for=""  class="is-size-5 has-text-white">Amount to Deposit</label><br>
			<input type="text" class="input is-outlined  column is-5" name="amount_to_deposit"><br>



			<label for=""  class="is-size-5 has-text-white">Account Name </label><br>
			<input type="text" class="input is-outlined   column is-5" name="account_name"><br>


			<label for=""  class="is-size-5 has-text-white">Depositor Name </label><br>
			<input type="text" class="input is-outlined     column is-5" name="depositor_name"><br>


			<label for="" class="is-size-5 has-text-white">Bank Name</label><br>
			<input type="text" class="input is-outlined   column is-5 " readonly="" placeholder="OVA BANK "><br>

		

			
			<div class="mt-5">
			
				<button class="button is-primary is-outlined px-6 mb-5" name="submit" type="submit">Transfer  </button>
			</div>



		</div>
	</div>






















</form>



























































</body>
</html>