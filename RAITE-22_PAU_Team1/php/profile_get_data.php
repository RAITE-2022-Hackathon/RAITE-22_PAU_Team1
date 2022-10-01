<?php
//GET DATA
include(".//connection.php");
$token = $_SESSION['token'];
$get_user_data = "SELECT `id`, `picture`, `firstname`, `lastname`, `email`, `number`, `status`, `password`, `date_time` FROM `users` WHERE  email = '$token' ";
$run_get_user_data = mysqli_query($con,$get_user_data);
$check_data = mysqli_num_rows($run_get_user_data);
if ($check_data> 0) {
	$get_info = mysqli_fetch_assoc($run_get_user_data);
	$pic = $get_info['picture'];
	$lname = $get_info['lastname'];
	$fname = $get_info['firstname'];
	$email = $get_info['email'];
	$full_name =  $fname.' '.$lname;
}
//UPDATE USER DATA
