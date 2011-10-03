<?php
	if (!(isset($_SESSION['username']))){
		echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<html>
<head>
<meta http-equiv='REFRESH' content='0;url=/index.php'></HEAD>
<BODY>
No no no...
</BODY>
</HTML>";
	}else{
		echo "<center>
<form method = 'get' action = 'javascript:logout();'>
	<input type = 'submit' value = 'logout'/>
</form>
<table border = '2' id = 'siteData'>
<thead>
	<tr>
		<th>Track History</th>
		<th>Vote!!</th>
		<th>Upload!!</th>
	</tr>
</thead>

<tbody>
	<tr>
		<td><p id = 'playlist'></p></td>
		<td></td>
		<td>
			<p id = 'uploader'>
				<form method = 'POST' action = 'upload()'>
					<input type = 'text' id = 'toUpload'></input>
					<input type = 'submit' id = 'pushMe'></input>
				</form>
			</p>
		</td>
	</tr>
</tbody>

<tfoot>
	<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</tfoot>
</table>
</center>
<script type = 'text/javascript'>
	setInterval(pls(),1000);
</script>
";
	}
?>

