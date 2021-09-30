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
			background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
		}
		.tops{
			margin-top: 120px;
		}
	</style>


<form action="\BankPro/Backendlogin/backendlogin.php" method="post">
	<div class="columns">
		<div class="tops column is-offset-4">
			
			<label for="" class="is-size-3 has-text-white">Username or Emaill</label><br>
			<input type="text" class="input is-primary  column is-5" placeholder="Username or Emaill" name="username"><br>


			<label for="" class="is-size-3 has-text-white">Password</label><br>
			<input type="password" class="input is-primary column is-5" placeholder=" Password" name="password"><br>





			<div class="mt-5">
				<button class="button is-primary px-6  mr-3" type="submit" name="sub">Login </button>
				<button class="button is-inverted is-outlined px-6">Forget Password </button>
			</div>





		</div>
	</div>

































</form>



































</body>
</html>