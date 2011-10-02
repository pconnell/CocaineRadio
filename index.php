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

<?php
    if (isset($_SESSION['username'])){
		echo "<script>
				 body();
			     //update('/body.php','pb');
			  </script>";
	}else{
		echo "<script>
				 log();
			     //update('/login.php','pb');
			  </script>";
	}
?>

<!--
	footer here
-->
<footer>
</footer>