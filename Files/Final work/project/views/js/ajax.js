function ajaxObj( meth, url ) 
{
	var x = new XMLHttpRequest({mozSystem: true});;
	x.open( meth, url, true );
	//x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	window.alert("return success");
	return x;
	
}
function ajaxReturn(x)
{
	if(x.readyState == 4 && x.status == 200)
	{
	    return true;	
	}
	else window.alert("ajax failed");
}

/* <script>
// Ajax Usage Example
var ajax = ajaxObj("POST", "parser.php");
ajax.onreadystatechange = function() {
	if(ajaxReturn(ajax) == true) {
	    alert(ajax.responseText);
	}
}
ajax.send("name=George&country=USA");
</script> */