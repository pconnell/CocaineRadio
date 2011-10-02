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

<p id = "whee"></p>
<script type = 'text/javascript'>
	

	function myFun(){
		document.getElementById('whee').innerHTML = "hello world!";
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