<?php
	//session_destroy();
	session_unset($_SESSION['username']);
	echo "$_SESSION['username']";
	include('index.php');
	//$login_pg = file_get_contents('/login.php');
	//echo $login_pg;
?>