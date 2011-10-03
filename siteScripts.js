function update(data,obj){
	var xmlhttp;
	//document.write(data);
	//document.write(obj);
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET",""+data,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4)
		{
			document.getElementById(""+obj).innerHTML=xmlhttp.responseText;
		}
	}
}

function logout(){
	update('/logout.php','pb');
}

function login(){
	var form = document.getElementById('log');
	var username = form.username.value;
	var password = form.password.value;
	var space = document.getElementById('pb');
	//space.innerHTML = "<h1>hello!</h1>"
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
function pls(){
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
	
