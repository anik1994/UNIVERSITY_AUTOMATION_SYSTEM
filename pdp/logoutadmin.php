<?php
	session_start();
	session_destroy();
	//unset($_SESSION['username']);
	//unset($_SESSION['usernamefc']);
	$_SESSION['message'] = "You are logged out";
		header("location: admin_login.php");
?>