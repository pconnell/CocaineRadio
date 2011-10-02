<!--
	header here
-->
<?php
	session_start();
	include('db.php');
?>
<html>
<head>
	<?php
		include('header.php');
	?>
</head>
<!--
	body here
-->
<body id = 'pb'>

</body>

<script>
	function myFun(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/body.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById("pb").innerHTML=xmlhttp.responseText;
			}
		}
	}
	myFun();
</script>


<?php
    /*if (isset($_SESSION['username'])){
		echo "<script>
				 //body();
			     update('body.php','pb');
			  </script>";
	}else{
		echo "<script>
				 //log();
			     update('login.php','pb');
			  </script>";
	}*/
?>

<!--
	footer here
-->
<footer>
</footer>