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
		$name = $_SESSION['username'];
		echo "<center><p>".$name."</p></center>";
		echo "<script type = 'text/javascript'>update('/body.php','pb');</script>";
		//include('body.php');
	}else{
		echo"<script type = 'text/javascript'>update('/login.php','pb');</script>";
		//include('login.php');
	}
?>

<!--
	footer here
-->
<footer>
</footer>