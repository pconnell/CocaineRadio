<form name = 'insert' method = 'POST' action = 'sql_query_entry.php'>
	<input type = 'text' id = 'query'/>
	<input type = 'submit' name = 'enter query'/>
	<?php
		include('db.php');
		if (isset($_POST['query'])){
			//run query on DB
			$query = $_POST['query'];
			$result = mysqli_query($mysqli,$query);
		}
	?>
</form>