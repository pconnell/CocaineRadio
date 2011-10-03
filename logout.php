<?php
	//session_destroy();
	session_unset($_SESSION['username']);
	session_unset();
	session_destroy();
	//include('login.php');
	include('index.php');
?>