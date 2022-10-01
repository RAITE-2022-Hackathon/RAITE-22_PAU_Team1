<?php
include(".//connection.php");
$token_id = $_SESSION['token'];
if (isset($_POST['submit-post'])) {

	$content = htmlspecialchars($_POST['user-post']);
	$uniqid = rand(1000000000,9999999999);
	$insert_post = "INSERT INTO post(post_by,post_content,post_id) VALUES('$token_id','$content','$uniqid')";
	$insert_post_run = mysqli_query($con,$insert_post);
	if ($insert_post_run) 
	{
		$_SESSION['success-post'] = "posted";
		echo "save";
	}
	else
	{
		$_SESSION['failed-post'] = "not posted";
		echo "dailed";
	}
}