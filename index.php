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
		echo "<script>update('/body.php','body');</script>";
	}else{
		echo "<script>update('/login.php','body');</script>";
	}
?>
<p id = 'body'></p>
<body id = 'pageBody'>
	
</body>

<footer id = 'foot'>
	
</footer>

<script>	
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
			xmlhttp.open("GET",''+page,true);
			xmlhttp.send();
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4)
				{
					document.getElementById(''+objID).innerHTML=xmlhttp.responseText;
				}
			}
	}
	
</script>