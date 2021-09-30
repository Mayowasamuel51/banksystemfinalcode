<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=`, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Login </title>
</head>
<body>

<style>
	body{
		background-image: linear-gradient(to right top, #aa5c83, #7c4c78, #4f3c64, #262c4b, #051a2e);
	}
	.tops{
			margin-top: 120px;
		}
</style></body>



<form action="\BankPro/Transactiobackend/checkbalance.php" method="post">
	


<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-3 has-text-white">Account Number</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Account Number" name="account_number"><br>


			<label for="" class="is-size-3 has-text-white">Pin Number </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Pin Number" name="pin"><br>





			<div class="mt-5">
				<button class="button is-info px-6  mr-3" type="submit" name="sub">Check Balance</button>
			
			</div>





		</div>



















</form>

























</body>
</html>