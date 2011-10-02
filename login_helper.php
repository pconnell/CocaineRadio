<?php
	session_start();
?>
<?php
	echo "in login_helper";
	include('db.php');
	$pw = $_GET['password'];
	$user = $_GET['username'];
	$query = "SELECT * FROM users WHERE username = '$user' AND pass = SHA('$pw');";
	$result = $DB->query($query);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	while($row = $result->fetch()){
		if ($row['id'] != ''){
		echo "in if";
			//echo "yay!<br/>";
			$_SESSION['username'] = $row['username'];
			$_SESSION['userID'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			//echo "<script>ajax_update('/body.php','body');</script>";
		}else{
			echo "in else";
			//echo "<script>ajax_update('/login.php','body');</script>";
		}
	}
?>

