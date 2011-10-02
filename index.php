<?php
	session_start();
	include('db.php');
	include('header.php');
?>


<?php
	if(isset($_SESSION['username'])){
		//put in body
		echo "<script>body();</script>";
	}else{
		//put in login
		echo "<script>log();</script>";
	}
?>

<body id = 'pageBody'>

</body>

