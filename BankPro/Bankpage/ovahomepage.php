<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
	<title>OVABANKPLC </title>
</head>
<body>
<style>
	body{
		background-image: linear-gradient(to right top, #282d34, #1c272b, #14201f, #0f1813, #0b0f02);
		height: 120vh;
	}
	.ova{
		margin-top: 120px;
	}

	
</style>



<nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <h1 class="title is-size-4 has-text-white">OVA BANK PLC </h1>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

   <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary mr-6" href="\BankPro/Login_and_sighup/sighup.php">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="\BankPro/Login_and_sighup/login.php">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>


<div class="ova columns">
	<div class="column ml-6">
		<div  class="card">
			<header class="card-header title ">MOVING FUNDS LIKE SPEEDS</header>
			<div class="card-content">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque placeat, quia ratione, dolore mollitia corrupti cum debitis accusamus consequatur perspiciatis accusantium. Repellat delectus nisi iusto sapiente hic, voluptatem iure quae, neque corrupti officia.	</p>
			</div>
			<form action="">
					<button class="button is-success is-outlined ml-4" formaction="\BankPro/Transaction/checkbalance.php">Check Balance </button>
					<button class="button is-info " formaction="\BankPro/Transaction/buyairtime.php">Buy Airtime </button>
					<button class="button is-info has-background-black mb-5" formaction="\BankPro/Transaction/deposit.php">Deposit</button>
			</form>
		</div>
	</div>



	<div class="column mr-6 ">
		<div  class="card">
			<header class="card-header title ">Learn More</header>
			<div class="card-content">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque placeat, quia ratione, dolore mollitia corrupti cum debitis accusamus consequatur perspiciatis accusantium. Repellat delectus nisi iusto sapiente hic, voluptatem iure quae, neque corrupti officia.	</p>
			</div>
			<form action="">
				
					<button class="button is-outlined is-inverted ">Customer care  </button>
					<button class="button is-success mb-5">Know more </button>
			</form>
		</div>
	</div>





</div>











</body>
</html>