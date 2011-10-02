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

<?php
	session_start();
	include('db.php');
	//include('header.php');
	//include('body.php');*/
	if(isset($_SESSION['username'])){
		include('body.php');
	}else{
		include('login.php');
	}
?>


<script type="text/javascript"> 
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
		xmlhttp.open("GET","/upload.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('successtext').innerHTML=xmlhttp.responseText;
			}
		}
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
				document.getElementById('body').innerHTML=xmlhttp.responseText;
			}
		}
	}
	
	function ajax_update(fileLoc, objID){
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
		xmlhttp.open("GET",fileLoc,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(objID).innerHTML=xmlhttp.responseText;
			}
		}
	}
	
</script>