<?php
	session_start();
?>
<?php
	include('db.php');
	$pw = $_GET['password'];
	$user = $_GET['username'];
	$query = "SELECT * FROM users WHERE username = '$user' AND pass = SHA('$pw');";
	$prep = $DB->prepare($query);
	$result = $prep->execute();
	//$result = $DB->query($query);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	$val = false;
	while($row = $result->fetch()){
		if ($row['id'] != ''){
			$val = true;
			$_SESSION['username'] = $row['username'];
			$_SESSION['userID'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			//include('header.php');
			include('body.php');
		}
	}
	if(!$val){
		echo "<center><h2>incorrect login info, please try again</h2></center>";
			//include('header.php');
			include('login.php');
	}
?>