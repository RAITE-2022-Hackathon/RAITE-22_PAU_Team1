<?php
session_start();
include('.//connection.php');
if (isset($_POST['login-button'])) {
	$email = htmlspecialchars($_POST['email']);
	$password =htmlspecialchars(md5($_POST['password']));
	$check = "SELECT * FROM users WHERE email = '$email' AND password = '$password' limit 1";
	$execute = mysqli_query($con,$check);
	if (mysqli_num_rows($execute)>0) 
	{
		header("location:dashboard.php");
		$_SESSION['token'] = $email;

	}
	else
	{
		$failed = 'emaill or password is incorrect';
		echo "failed";
	}
}
$lastna = '';
$firstna = '';
$token = $_SESSION['token'];
$get_post = "SELECT lastname,firstname FROM users WHERE email = '$token' ";
$run_get_post = mysqli_query($con,$get_post);
$check_data = mysqli_num_rows($run_get_post);
if ($check_data > 0) {
	while ($row = mysqli_fetch_assoc($run_get_post)) {
	$lastna = $row['lastname'];
	$firstna = $row['firstname'];

		}	
}
