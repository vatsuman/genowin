<script type="text/javascript">
function showHint()
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET",'http://api.facebook.com/method/fql.query?query=select+total_count+from+link_stat+where+url=%22http://www.facebook.com/W3html%22',true);
	xmlhttp.send();
}
showHint();
</script>

<div id="txtHint"></div>