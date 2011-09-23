<?php
	//$mysqli = mysqli_connect('mysql://coke-radio.pagodabox.com/tmp/mysql/belle.sock','elenore','8dnTIbvF','belle');
	//$mysqli = new mysqli('/tmp/mysql/belle.sock','elenore','8dnTIbvF','belle') or die('Failed to connect');
	$mysqli_url = 'mysql://elenore:8dnTIbvF@localhost/belle';
	$mysqli = mysqli_connect($mysqli_url);
?>