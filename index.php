<html>
<head>
<title>AudioNarcotics</title>
<!--<center>Cocaine Radio<br/><em>-get your fix.</em> -->
<center><img src="cocaine radio.jpg" alt="cocaine" width="1300" height="250" />
</center>
</head>
<body>
<br/>
<center>
<table id = 'projectData'>
	<thead>
		<tr>
			<th width = "25%"><a href = "/about.php" target = '_blank'>Info/About</a></th>
			<th width = "25%"><a href = "http://pconnell89.umwblogs.org" target = '_blank'>Blog</a></th>
			<th width = "25%"><a href = "http://www.twitter.com/CocaineRadio" target = '_blank'>Twitter</a></th>
			<th width = "25%"><a href = "http://www.facebook.com/patrick.s.connelly" target = '_blank'>Facebook</a></th>
			<th><a></a></th>
		</tr>
	</thead>
</table>
<p id = "player"></p></tr>
<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here (less jumpy)</a></p>
</center>
<!--AJAX for player/playlist updates-->
<table border = '2' id = 'siteData'>
<thead>
	<tr>
		<th width = "33%">Track History</th>
		<th width = "33%">Vote!!</th>
		<th width = "33%">Upload!!</th>
	</tr>
</thead>

<tbody>
	<tr>
		<td><p id = 'playlist'></p></td>
		<td></td>
		<td></td>
	</tr>
</tbody>

<tfoot>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</tfoot>
</table>
<script type="text/javascript"> 
	function update(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			//document.write("XMLHttp");
		}
		else
		{// code for IE6, IE5
			//write("ActiveXObject");
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/pls.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('playlist').innerHTML=xmlhttp.responseText;
			}
		}
	}
	setInterval(update,10000);
	
	function getPlayer(){
		var player = document.getElementById('player').innerHTML;
		player = (player.trim) ? player.trim() : player.replace(/^\s+/,'');
		if (player == ""){
			var xmlhttp;
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET","/player.php",true);
			xmlhttp.send();
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4)
				{
					document.getElementById('player').innerHTML=xmlhttp.responseText;
				}
			}
		}
	}
	setInterval(getPlayer,5000);
</script>
</body>
</html>