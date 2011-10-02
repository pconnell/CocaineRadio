<?php
	session_start();
	include('header.php');
	//include('body.php');*/
	if(isset($_SESSION['username'])){
		include('body.php');
	}else{
		include('login.php');
	}
?>
<!--
<html>
<head id = 'pageHead'>
<?php
	include('header.php');
?>
</head>
<body id = 'pageBody'>
<?php
	if(isset($_SESSION['username'])){
		include('body.php');
	}else{
		include('login.php');
	}
?>
</body>
<script type = "text/javascript">
	function ajax_update(dataPage,pageObjectID){
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
		xmlhttp.open("GET",dataPage,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(pageObjectID).innerHTML=xmlhttp.responseText;
			}
		}
	}
	setInterval(ajax_update('/pls.php','player'),1000);
	
	function slideshow(){
		
	}
</script>
</html>
-->