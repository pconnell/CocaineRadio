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
	}else{
		//added this else to try to make them into links!
		$pattern = "/<tr><td>[0-9]{2}:[0-9]{2}:[0-9]{2}<\/td><td>[^\<]*</";
		$matches = array();
		$ans = preg_match_all($pattern,$html,$matches);
		
		$titles = array();
		$times = array();
		$pattern = "/<td>[0-9]{2}:[0-9]{2}:[0-9]{2}<\/td>/";
		foreach ($matches as $m){
			foreach ($m as $v){
				//store titles in $titles as $time=>$title
				$v = preg_replace($pattern,"",$v);
				$v = substr($v,0,strlen($v)-1);
				$v = str_replace("<tr><td>","",$v);
				$titles[] = $v;
			}
		}
		$output = '<table class="default" border="0" cellpadding="2" cellspacing="2">';
		
		for ($i = 0; $i < count($titles); $i++){
			$id = $i + 1;
			$title = $titles[$i];
			$output = $output."<tr id = '$title'><td>$id</td><td><a onClick=\"javascript:setVotingSpace('$title');backgroundColor='blue'\">$title</a></td>";
			if ($id == 1){
				$output = $output."<td><b>Current Song</b></td>";
			}
			$output = $output."</tr>";
		}
		$output = $output."</table>";
		echo $output;
	}
	echo $played;
?>
