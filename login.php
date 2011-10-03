
<center>
		<h1>Please log-in to upload, vote, and view play history!</h1>
		<form id = 'log' method = 'get' action = 'javascript:login();'>
		Username:<input type = 'text' id = 'username' style='vertical-align:middle'/>
		Password:<input type = 'password' id = 'password'/>
		<input type = 'submit' id = 'submit' value = 'login'/>
	</form>
</center>
<script>
	function login(){
		var form = document.getElementById('log');
		var username = form.username.value;
		var password = form.password.value;
		var space = document.getElementById('pb');
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
		var queryString = "/login_helper.php?username="+username+"&password="+password;
		xmlhttp.open("GET",queryString,true);
		xmlhttp.send(null);
		
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				space.innerHTML = xmlhttp.responseText;
			}
		}
	}
</script>