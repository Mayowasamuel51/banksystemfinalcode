<?php 
session_start();
// connection file 
include_once $_SERVER['DOCUMENT_ROOT']. '\BankPro/connection/conn.php';


if(isset($_POST['sub'])){
	$username = trim(mysqli_real_escape_string($conn,$_POST['username']));

	$Emaill = trim(mysqli_real_escape_string($conn,$_POST['emaill']));

	$pin = trim(mysqli_real_escape_string($conn,$_POST['pin']));

	$phone_number = trim(mysqli_real_escape_string($conn,$_POST['phone_number']));

	$birth_date = trim(mysqli_real_escape_string($conn,$_POST['birth_date']));

	$location = trim(mysqli_real_escape_string($conn,$_POST['location']));

	$password = trim(mysqli_real_escape_string($conn,$_POST['password']));

	$password_pass = trim(mysqli_real_escape_string($conn,$_POST['password_pass']));
	
	// checking for ERROR From the User 

	if(empty($username)||empty($Emaill)||empty($pin)||empty($phone_number)||empty($birth_date)||empty($location)||empty($password)|| empty($password_pass)){
		header('Location:\BankPro/Login_and_sighup/sighup.php? please fill the space ');
		exit();
	}


	elseif (preg_match('/[0-9]/',$username)) {
		header('Location:\BankPro/Login_and_sighup/sighup.php? username must be words');
		exit();
	}

	elseif (preg_match('/[A-Za-z]/',$pin)) {
		header('Location:\BankPro/Login_and_sighup/sighup.php? pin must be in dight');
		exit();
	}

	elseif (preg_match('/[A-Za-z]/',$phone_number)) {
		header('Location:\BankPro/Login_and_sighup/sighup.php? pin must be in dight');
		exit();
	}

	elseif ($password != $password_pass) {
		header('Location:\BankPro/Login_and_sighup/sighup.php?password does not match');
		exit();
	}

	else{

		$statement = mysqli_stmt_init($conn);
		$check_databse = "SELECT * FROM banksystem WHERE username = ? OR emaill = ? ";

		if(!mysqli_stmt_prepare($statement, $check_databse)){
			header('Location:\BankPro/Login_and_sighup/sighup.php?ERROR WITH THE DATABASE ');
			exit();
		}else{
			// checking if sighup user is giving a existing name or emaill 
			mysqli_stmt_bind_param($statement,'ss',$username,$Emaill);
			mysqli_stmt_execute($statement);

			$check_data = mysqli_stmt_get_result($statement);
			if($row_data = mysqli_fetch_assoc($check_data)){
				header('Location:\BankPro/Login_and_sighup/sighup.php?USERNAME AND EMAILL EXIST  ');
				exit();
			}else{
				// inserting into the database below 
				$insert_into_database = "INSERT INTO banksystem(username,emaill,passwords,accountnumber, pin_number,totalamount,airtime,bvn,phonenumber,birthdate,debitcard,location) VALUES (?,?,?,?,?,0,0,?,?,?,?,?)";
				// checking if database has no error !!!!!!
				if(!mysqli_stmt_prepare($statement, $insert_into_database)){
					header('Location:\BankPro/Login_and_sighup/sighup.php?ERROR WITH THE DATABASE INSERTING DATA ');
					exit();
				}else{
					$accountNumber = rand();
					$bvn = rand();
					$debit_card = rand();

					$bvn = rand(11,233546363565363);
					$debit_card = rand(11,52434634635636);

					$password_hash = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($statement,'sssiisssss',$username,$Emaill,$password_hash,$accountNumber,$pin,$bvn,$phone_number,$birth_date,$debit_card,$location);
					mysqli_stmt_execute($statement);

					// take the user to login page

					header('Location:\BankPro/Login_and_sighup/login.php?WELCOME  ');
					exit();














				}


			}










		}


	}






















































}