<?php
include(".//connection.php");

$getlastname = '';
$getfirstname = '';
$getemail = '';
$getnumber = '';
if (isset($_POST['register'])) {

		$lastname = htmlspecialchars($_POST['first_name']);
		$firstname = htmlspecialchars($_POST['last_name']);
		$email = htmlspecialchars($_POST['email']);
		$number = htmlspecialchars($_POST['number']);
		$password = htmlspecialchars($_POST['password']);
		$confirm_password = htmlspecialchars($_POST['password_repeat']);

		$check_account = "SELECT firstname,lastname,email,number from users WHERE firstname = '$firstname' AND lastname = '$lastname' AND email = '$email' AND number = '$number'  ";
		$run_check_account = mysqli_query($con,$check_account);
		$check_if_exist = mysqli_num_rows($run_check_account);
		if ($check_if_exist > 0) {
			$res = mysqli_fetch_assoc($run_check_account);
			$getlastname = $res['$lastname'];
			$getfirstname = $res['firstname'];
			$getemail = $res['email'];
			$getnumber = $res['number'];

		}
		elseif ($email == $getemail) {
			$email_aval = "email is already available";
		}
		elseif ($number == $getnumber) {
			$number_aval = "Number is already available";
			# code...
		}
		else
		{
			if ($password == $confirm_password) 
			{
				$md5password = md5($password);
				$insert_data = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `number`,`password`) VALUES ('$firstname','$lastname','$email','$number','$md5password')";
				$run_insert_data = mysqli_query($con,$insert_data);
				if ($run_insert_data) {
					header("location:.//login.php");
				}
			}
			else
			{
				$password_not_correct = "confirm password is wrong";
			}

		}
}