<html>
<head>
<title>TestPlayer</title>
<center>Cocaine Radio<br/><em>-get your fix.</em></center>
</head>
<body>
<OBJECT ID="MediaPlayer" WIDTH=385 HEIGHT=147
CLASSID="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
STANDBY="Loading Windows Media Player components..."
TYPE="application/x-oleobject">
<PARAM NAME='FileName' VALUE='http://72.205.2.22:8000' valuetype='ref'; ref>
<param name="AudioStream" value="1">
<param name="AutoSize" value="0">
<param name="AutoStart" value="0">
<param name="AnimationAtStart" value="0">
<param name="AllowScan" value="1">
<param name="AllowChangeDisplaySize" value="-1">
<param name="AutoRewind" value="0">
<param name="Balance" value="0">
<param name="BaseURL" value>
<param name="BufferingTime" value="5">
<param name="CaptioningID" value>
<param name="ClickToPlay" value="-1">
<param name="CursorType" value="0">
<param name="CurrentPosition" value="-1">
<param name="CurrentMarker" value="0">
<param name="DefaultFrame" value>
<param name="DisplayBackColor" value="0">
<param name="DisplayForeColor" value="16777215">
<param name="DisplayMode" value="1">
<param name="DisplaySize" value="1">
<param name="Enabled" value="-1">
<param name="EnableContextMenu" value="-1">
<param name="EnablePositionControls" value="-1">
<param name="EnableFullScreenControls" value="-1">
<param name="EnableTracker" value="-1">
<param name="InvokeURLs" value="-1">
<param name="Language" value="-1">
<param name="Mute" value="0">
<param name="PlayCount" value="0">
<param name="PreviewMode" value="0">
<param name="Rate" value="1">
<param name="SAMILang" value>
<param name="SAMIStyle" value>
<param name="SAMIFileName" value>
<param name="SelectionStart" value="-1">
<param name="SelectionEnd" value="-1">
<param name="SendOpenStateChangeEvents" value="-1">
<param name="SendWarningEvents" value="-1">
<param name="SendErrorEvents" value="-1">
<param name="SendKeyboardEvents" value="0">
<param name="SendMouseClickEvents" value="0">
<param name="SendMouseMoveEvents" value="0">
<param name="SendPlayStateChangeEvents" value="-1">
<param name="ShowCaptioning" value="-1">
<param name="ShowControls" value="-1">
<param name="ShowAudioControls" value="-1">
<param name="ShowDisplay" value="-1">
<param name="ShowGotoBar" value="0">
<param name="ShowPositionControls" value="0">
<param name="ShowStatusBar" value="-1">
<param name="ShowTracker" value="-1">
<param name="TransparentAtStart" value="0">
<param name="VideoBorderWidth" value="0">
<param name="VideoBorderColor" value="333333">
<param name="VideoBorder3D" value="-1">
<param name="Volume" value="-1">
<param name="WindowlessVideo" value="-1">
<EMBED TYPE="application/x-mplayer2" SRC="http://72.205.2.22:8000"
NAME="MediaPlayer"
WIDTH=320
HEIGHT=240>
</EMBED></OBJECT> 
<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here</a>
</p>
<p>
<?php 
	$html = implode('', file('http://72.205.2.22:8000/played.html?sid=1')); //need to update for proper url/ip
	$loc = strrpos($html,'<br><table'); 
	$loc2 = strrpos($html,'<br></font>'); 
	$len = $loc2-$loc; 
	$played = substr($html,$loc,$len); 
	echo $played; 
?>
<p id = 'playlist'></p>

<!--
<script type="text/javascript"> 
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	document.write('something<br/>');
	xmlhttp.open("GET",/*"http://72.205.2.22:8000/played.html?sid=1"*/"http://www.bash.org/",true);
	xmlhttp.send();
	document.write('something else');
	document.getElementById("playlist").innerHTML=xmlhttp.responseText;
	/*xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("playlist").innerHTML=xmlhttp.responseText;
		}
    }*/
</script>  -->
</body>
</html>