<?php 
	session_start();
	$login = $_SESSION['login_user_type'];
	foreach($_SESSION as $key => $val){
		if (substr($key, 0, 9) !== 'startTime'){
			unset($_SESSION[$key]);
		}
	}
	header('location:login.php');
