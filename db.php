<?php
	$mysqli = new \PDO('mysql:dbname=belle;host=localhost;unix_socket=/tmp/mysql/belle.sock','elenore','4:44mile');
	$DB->setFetchMode(PDO::FETCH_ASSOC);
	//$mysqli = new mysqli("localhost;unix_socket=/tmp/mysql/belle.sock",'elenore','8dnTIbvF','belle');
	//$mysqli = new PDO("mysql:host=localhost;dbname=belle;unix_socket=/tmp/mysql/belle.sock",'elenore','8dnTIbvF');
?>