<?php
	//$mysqli = mysqli_connect("localhost;unix_socket=/tmp/mysql/deadra.sock","lindsy","XUJQTbOP","deadra",3307,"deadra.sock");
	$mysqli = new mysqli('/tmp/mysql/deadra.sock','lindsy','XUJQTbOP','deadra') or die('Failed to connect');
?>