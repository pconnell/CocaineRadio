<?php
	session_unset();
	$login_pg = file_get_contents('/login.php');
	echo $login_pg;
?>