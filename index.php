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
<p id = "player"></p>
<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here</a></p>
</center>
<!--AJAX for player/playlist updates-->
<p id = 'playlist' name = 'playlist'></p>  
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