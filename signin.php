<?php
session_start();
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
</form>
