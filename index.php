<?php
	session_start();
	/*include('header.php');
	//include('body.php');
	if(isset($_SESSION['username'])){
		include('body.php');
	}else{
		include('login.php');
	}*/
?>

<?php
	include('header.php');
?>

<?php
	if(isset($_SESSION['username'])){
		echo "<script>update('/body.php','pageBody');</script>";
	}else{
		echo "<script>update('/login.php','pageBody');</script>";
	}
?>

<body id = 'pageBody'>
	
</body>

<footer id = 'foot'>
	
</footer>

<script>
/*function ajax_update(dataPage,pageObjectID){
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
				document.getElementById(''+pageObjectID).innerHTML=xmlhttp.responseText;
			}
		}*/
		
	function update(page,objID){
	var xmlhttp;
		if (window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET",""+page,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(""+objID).innerHTML=xmlhttp.responseText;
			}
		}
	}
</script>