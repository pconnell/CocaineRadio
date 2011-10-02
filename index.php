<!--
	header here
-->
<?php
	session_start();
	include('db.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type = 'text/javascript' src = 'siteScripts.js'/>
		<center>
			<object id="fmp256" type="application/x-shockwave-flash" data="/flash/minicaster.swf" width="180" height="70">
			  <param name="movie" value="minicaster.swf" />
			  <param name="wmode" value="transparent" />
			   <div class="stirfry">
			   <h4>Minicaster Radio Playhead</h4>
			   <p>To listen you must <a href="http://www.macromedia.com/go/getflashplayer/"
			   title="Click here to install the Flash browser plugin from Macromedia">install Flash Player</a>. Visit
			   <a href="http://www.draftlight.net/dnex/mp3player/minicaster/" title="Draftlight Networks">Draftlight Networks</a>
			   for more info.</p></div>
			</object>		
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
		</center>
</head>
<!--
	body here
-->
<body id = 'pb'>

</body>

<?php
/* (isset($_SESSION['username'])){
		echo "<script>
			     update('/body.php','pb');
			  </script>";
	}else{
		echo "<script>
			     update('/login.php','pb');
			  </script>";
	}*/
	include('body.php');
?>

<!--
	footer here
-->
<footer>
</footer>