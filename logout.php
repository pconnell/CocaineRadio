<?php
	session_destroy();
	$login_pg = file_get_contents('/login.php');
	echo $login_pg;
?>