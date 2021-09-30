<?php   



$localhost = 'localhost';
$username = 'root';
$password  = '';
$database_name  = 'banking';





$conn = mysqli_connect($localhost,$username,$password,$database_name);
if (!$conn) {
	die("not exit ").mysqli_error();
}