<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>Login </title>
</head>
<body>

<style>
	body{
		background-image: linear-gradient(to right top, #4a494f, #5c4c6a, #7c497b, #a33d7e, #cb2474);
	}
	.tops{
			margin-top: 120px;
		}
</style></body>



<form action="\BankPro/Transactiobackend/airtimebackend.php" method="post">
	


<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-3 has-text-white">Phone  Number</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Phone Number" name="phone_number"><br>


			<label for="" class="is-size-3 has-text-white">Amount  </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Amount" name="amount_to_buy"><br>


			<label for="" class="is-size-3 has-text-white">Pin Number </label><br>
			<input type="text" class="input is-primary column is-5" placeholder="Pin Number" name="pin"><br>





		
					<button class="button is-primary is-outlined px-6 mb-5" name="submit" type="submit">Transfer  </button>
		




		</div>



















</form>

























</body>
</html>