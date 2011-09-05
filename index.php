<html>
<head>
<title>TestPlayer</title>
<center>Cocaine Radio<br/><em>-get your fix.</em></center>
<!--AJAX for playlist updates-->
</head>
<body>
<embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=3116409&play_status=1' quality='high' 
bgcolor='#ffffff' width='398' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' 
type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here</a>
</p>
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
	setInterval(update,5000);
</script>
</body>
</html>