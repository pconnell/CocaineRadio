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
	<script type = 'text/javascript'>
	

	/*function myFun(){
		//document.getElementById('whee').innerHTML = "hello world!";
	}
	myFun();*/
</script>
</head>
<!--
	body here
-->
<body>
	<p id = 'pb'></p>
</body>
<?php
    if (isset($_SESSION['username'])){
		echo "<script type = 'text/javascript'>body();</script>";
		//include('body.php');
	}else{
		echo"<script type = 'text/javascript'>login();</script>";
		//include('login.php');
	}
?>
<!--
	footer here
-->
<footer>
</footer>