<?php
echo "
<center>
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
		<td><p id = 'voting'</p></td>
		<td>
			<p id = 'uploader'>
				<a href='http://dropitto.me/pconnell89' target = '_blank'>Upload via this external website</a>
				<br/>password is 'correcthorsebatterystaple'
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
	//setInterval(pls,1000);
</script>
";
?>
