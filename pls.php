<?php
	try{
		$html = file_get_contents('http://72.205.2.22:8000/played.html?sid=1');
		//$html = implode('', file('http://72.205.2.22:8000/played.html?sid=1'));
	}catch (Exception $e){
		$html = "";
	}
	//fix to use regex instead, more reliable.
	$loc = strrpos($html,'<br><table');
	$loc2 = strrpos($html,'<br></font>');
	$len = $loc2-$loc;
	$played = substr($html,$loc,$len);
	if ($played == null){
		$played = "<p>Stream is not broadcasting<br/>no play history available.</p>";
	}
	echo $played;
	
?>