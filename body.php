<html>
<body id = 'pageBody'>

<form action = ''>
	<input type = 'submit' name = 'Logout' onClick = "ajax_update('/logout.php','pageBody')"/>
</form>

<center>
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
				<form method = 'POST' action = "upload()">
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
<p id = 'successtext'>
</p>
<script type="text/javascript"> 
	function update(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			//write("ActiveXObject");
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/pls.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('playlist').innerHTML=xmlhttp.responseText;
			}
		}
	}
	setInterval(update,1000);
	
	function upload(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			//document.write("XMLHttp");
		}
		else
		{// code for IE6, IE5
			//write("ActiveXObject");
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/upload.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('successtext').innerHTML=xmlhttp.responseText;
			}
		}
	}
	
	function logout(){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			//document.write("XMLHttp");
		}
		else
		{// code for IE6, IE5
			//write("ActiveXObject");
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET","/logout.php",true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById('body').innerHTML=xmlhttp.responseText;
			}
		}
	}
	
	function ajax_update(fileLoc, objID){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
			//document.write("XMLHttp");
		}
		else
		{// code for IE6, IE5
			//write("ActiveXObject");
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET",fileLoc,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(objID).innerHTML=xmlhttp.responseText;
			}
		}
	}
	
</script>
</body>
</html>