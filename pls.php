<?php
	$html = implode('', file('http://72.205.2.22:8000/played.html?sid=1'));
	$loc = strrpos($html,'<br><table');
	$loc2 = strrpos($html,'<br></font>');
	$len = $loc2-$loc;
	$played = substr($html,$loc,$len);
	echo $played;
?>