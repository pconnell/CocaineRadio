function update(data,obj){
	var xmlhttp;
	document.write(data);
	document.write(obj);
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

function body(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET",'body.php',true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4)
		{
			document.getElementById('pb').innerHTML=xmlhttp.responseText;
		}
	}
}

function log(){
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","login.php",true);
	xmlhttp.send();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4)
		{
			document.getElementById("pb").innerHTML=xmlhttp.responseText;
		}
	}
}
