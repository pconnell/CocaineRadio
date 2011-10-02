<?php
	session_start();
	include('db.php');
?>
<head>
<title>AudioNarcotics</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<center>
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
	</p>
	<p><a href = "http://72.205.2.22:8000/listen.pls?sid=1">Download podcast here (less jumpy)</a></p>
</center>
</head>

<?php
	//session_start();
	//include('db.php');
	//include('header.php');
	//include('body.php');
	if(isset($_SESSION['username'])){
		//include('body.php');
		echo "<script>setLogin();</script>";
	}else{
		//include('login.php');
		echo "<script>setBody();</script>";
	}
?>

<body id = 'pageBody'>

</body>


<script type="text/javascript"> 
	function setBody(/*data*/){
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
		xmlhttp.open("GET",'/body.php',true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('pageBody').innerHTML=xmlhttp.responseText;
			}
		}
	
	}
	function setLogin(){
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
		xmlhttp.open("GET",'/login.php',true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('pageBody').innerHTML=xmlhttp.responseText;
			}
		}
	}
	
//	setBody('/body.php');
	

	function update(){
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
	setInterval(update,1000);
	
	function upload(){

	}
	
	function logout(){
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
		xmlhttp.open("GET","/logout.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('pageBody').innerHTML=xmlhttp.responseText;
			}
		}
	}
	
	function ajax(file,id){
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
		xmlhttp.open("GET",""+file,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(""+id).innerHTML=xmlhttp.responseText;
			}
		}
	}
	//ajax('/login.php','pageBody');
	//ajax('/login.php','body');
</script>