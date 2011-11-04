<?php
	session_start();
?>
<?php
<?php
	session_start();
?>
<?php
	include('db.php');
	$pw = $_GET['password'];
	$user = $_GET['username'];
	$query = "SELECT * FROM users WHERE username = '$user' AND pass = SHA('$pw');";
	//$query = "SELECT * FROM users WHERE username = '$user';";
	//echo $query;
	$res = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($res)){
		if ($row['id'] != ''){
			//echo "yay!<br/>";
			$_SESSION['username'] = $row['username'];
			$_SESSION['userID'] = $row['userID'];
			$_SESSION['email'] = $row['email'];
			//include('header.php');
			include('body.php');
		}else{
			echo "<center><h2>incorrect login info, please try again</h2></center>";
			//include('header.php');
			include('login_form.php');
		}
	}
?>
?>