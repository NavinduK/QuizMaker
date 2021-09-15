<?php 
session_start();
$login = $_SESSION['login_user_type'];
session_destroy();
	header('location:login.php');
?>