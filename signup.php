<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) header('location: private.php');
if(count($_POST)>0){
	$fh-fopen('users.csv','a')
	if(!isset($_POST['email']) die('please enter your email');
	if(!isset($_POST['password']) die('please enter your email');
	
	// check if the email is valid
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die('Your email is invalid');
	
	// check if password length is between 8 and 16 characters
	if(strlen($_POST['password'])<8) die('Please enter a password >=8 characters');
	
	
}

// improve the form
?>
<form method="POST">
	<input type="email" name="email" />
	<input type="password" name="password" />
	
	<input type="submit" value="submit" />
</form>
