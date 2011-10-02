<script type="text/javascript"> 
	function update(datapage,pageobject){
		var xmlhttp;
		if (window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.open("GET",""+datapage,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4)
			{
				document.getElementById(""+pageobject).innerHTML=xmlhttp.responseText;
			}
		}
	}
</script>