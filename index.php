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
	

	function myFun(){
		document.getElementById('whee').innerHTML = "hello world!";
	}
	myFun();
</script>
</head>
<!--
	body here
-->
<body id = 'pb'>
<?php
    if (isset($_SESSION['username'])){
		include('body.php');
	}else{
		include('login.php');
	}
?>
</body>




<!--
	footer here
-->
<footer>
</footer>