<?php
	session_start();
	/*include('header.php');
	include('body.php');*/
	if(isset($_SESSION['username'])){
		include('body.php');
	}else{
		include('login.php');
	}
?>