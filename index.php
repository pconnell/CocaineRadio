<!--
this is a better version of the index page 
it'll do a better job for AJAXy stuff.
We'll see what happens.

this code could potentially be useful when trying to do the whole 
"ajaxy click on a track in the history to rate it" thing
<script type="text/javascript">
function creatediv()
d=document.createElement('div')
d.innerhtml=variable holding the text you wish to display
</script>
-->
<?php
	session_start();
	include("db.php");
?>
<html>
<head>
<title>AudioNarcotics</title>
<center>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here (less jumpy)</a></p>
</center>

<p id = 'body'></p>
</head>
<body id = 'pageBody'>

</body>
<script type = 'text/javascript'>
	function update(dataPage, objID){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			//write("ActiveXObject");
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET",''+dataPage,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(''+objID).innerHTML=xmlhttp.responseText;
			}
		}
	}
	//update('/body.php','pageBody');
	update('/body.php','body');
</script>

<footer>
<!-- come up with something catchy to put in here.
-->
</footer>
</html>