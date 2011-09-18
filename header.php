<?php
	include('db.php');
	if ($db != null){
		echo "connected to db!<br/>";
	}
?>
<html>
<head>
<title>AudioNarcotics</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<center>
<!--<img src = "/cocaineradio/cokeradio.jpg" valign = 'middle'/>
<img src = '/cocaineradio/fix.jpg' align = 'left' valign='middle'/>
<img src = '/cocaineradio/fix.jpg' align = 'right' valign='middle'/> -->
	<table id = 'projectData'>
		<thead>
			<tr>
				<th ><a href = "/about.php" target = '_blank'>Info/About</a></th>
				<th ><a href = "http://pconnell89.umwblogs.org" target = '_blank'>Blog</a></th>
				<th ><a href = "http://www.twitter.com/CocaineRadio" target = '_blank'>Twitter</a></th>
				<th ><a href = "http://www.facebook.com/patrick.s.connelly" target = '_blank'>Facebook</a></th>
				<th><a></a></th>
			</tr>
		</thead>
	</table>
	<p id = "player">
		<?php
			include('player.php');
		?>
	</p></tr>
	<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here (less jumpy)</a></p>
</center>
</head>
</html>