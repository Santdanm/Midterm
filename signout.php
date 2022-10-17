<?php
session_start();
if (!isset($_SESSION['logged']))header('location: signin.php');
unset($_SESSION['logged']);
session_destroy();
?>
// redirect the user to the public page.