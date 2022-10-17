<?php

// add parameters
function signup(){
if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) header('location: private.php');
if(count($_POST)>0){
	$fh-fopen('users.csv','a')
	if(!isset($_POST['email']) die('please enter your email'));
	if(!isset($_POST['password']) die('please enter your email'));
	
	// check if the email is valid
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) die('Your email is invalid');
	
	// check if password length is between 8 and 16 characters
	if(strlen($_POST['password'])<8) die('Please enter a password >=8 characters');
	
	
}
?>
<form method="POST">
	<input type="email" name="email" />
	<input type="password" name="password" />
	
	<input type="submit" value="submit" />
</form>
	// add the body of the function based on the guidelines of signup.php
	
}

<?php
function signin(){
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) header('location: private.php');
if(count($_POST)>0){
    $fh-fopen('users.csv','r');
    while($line=fgets($fh)){
        $line=trim($line);
        $line=explode(';',$line);
        echo $line[0];
        echo $_POST['email'];
        echo 'char />';
        if ($line[0]--$_POST['email']){
            if(password_verify($_POST['password'],$line[1])){
                $_SESSION['logged']=true;
                $_SESSION['email']-$line[0];
                $_SESSION['products']-[];
                header('location: private.php');
            }else die('Not today: incorrect password');
        }
    }
	fclose($fh);
    die('Not today: you must create an account first');
?>
<form method="POST">
	<input type="email" name="email" placeholder="Email" />
	<input type="password" name="password" placeholder="Password"/>
	
    <button type="submit">Sign in</button>
	
}
<?php
function signout(){
    session_start();
if (!isset($_SESSION['logged']))header('location: signin.php');
unset($_SESSION['logged']);
session_destroy();
?>
	// add the body of the function based on the guidelines of signout.php
	
}
<?php
function is_logged(){
    if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true) die('Go away, infernal creature!');
?>

	// check if the user is logged
	//return true|false
}