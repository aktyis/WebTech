<!DOCTYPE html>
<html>
<head>
<style>
#header{
    background-color:#380000;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#B8B8B8;
    height:500px;
    width:150px;
    float:left;
    padding:5px;	      
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#rightlink:link 
{
	color: rgb(200,200,220);
	background-color: transparent;
	text-decoration: none;
}
#rightlink:visited 
{
	color: rgb(200,200,220);
	background-color: transparent;
	text-decoration: none;
}
#rightlink:hover 
{
	color: rgb(100,280,550);
	background-color: transparent;
	text-decoration: underline;
}
#regButton
{
	float:right;
	margin-left:0em;
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
	padding:5px;	 	 
}
</style>
</head>
<body>
<div id="header">
<h1>Engineering University Of Bangladesh</h1>
<div align="right">
<?php
$db_connect = mysqli_connect("localhost" , "root" , "" ,"webtechprojectdatabase");
	
	$get_id="13-23471-1";
	$sql= "SELECT * FROM students WHERE user_id='$get_id' ";
	$result = $db_connect->query($sql);

	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $sName = $row["name"];
		echo "<h3>$sName</h3>";
		echo "<h4>$get_id</h4>";
    }
	}
	$db_connect->close();
?>
</div>
</div>

<script>
	function ajaxFunction()
	{
		 var ajaxRequest;  // The variable that makes Ajax possible!
		 try
		 {
		    ajaxRequest = new XMLHttpRequest();
		 }
		 catch (e)
		 {
		   try
		   {
			  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		   }
		   catch (e) 
		   {
			  try
			  {
				 ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  catch (e)
			  {
				 alert("Your browser broke!");
				 return false;
			  }
		   }
		 }
		 ajaxRequest.onreadystatechange = function()
		 {
		   if(ajaxRequest.readyState == 4)
		   {
			  var ajaxDisplay = document.getElementById('ajaxDiv');
			  ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		 }
		 // Now get the value from user and pass it to
		 // server script.
		 var id = "13-23471-1";
		 var queryString = "?id=" + id ;
		 ajaxRequest.open("POST", "ajax-example.php"+queryString, true);
		 ajaxRequest.send(null); 
}
</script>

<div id="nav">
<a class="rightlink" href=""><b>Courses & Results</b></a><br>
<a class="rightlink" href=""><b>Profile</a></b><br>
<a class="rightlink" href=""><b>Library</a></b><br>
<a class="rightlink" href=""><b>Financials</a></b><br>


</div>
<br>
<div id="regButton">
<input type=submit value="Pre-Registration" style="height:40px; background-color:#00FFFF; 	font: italic bold 12px/30px Georgia, serif;
">
</div>
<div id="section">
	<div class="semesterDropDownList" id="semesterSelectTag"></div>
<h2></h2>
<p>
<input type=submit onclick="ajaxFunction()" value="showroutine" ">
<div class="ajaxDiv" id="ajaxDiv"></div>

</p>
<p>

</p>
</div>

<div id="footer">
Copyright © We Are Devolopers
</div>
	<script>
	
	
	
		var myDiv = document.getElementById("semesterSelectTag");
		<? php
		$db_connect = mysqli_connect("localhost" , "root" , "" ,"webtechprojectdatabase");
		$get_id="13-23471-1";
		$sql= "SELECT * FROM students WHERE user_id='$get_id' ";
		$result = $db_connect->query($sql);

		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$sSemester = $row["semester"];
			echo "<h3>$sName</h3>";
		}
		}
		$db_connect->close();
		?>
		var array = ["Volvo","Saab","Mercades","Audi"];
		
		var selectList = document.createElement("select");
		selectList.setAttribute("id", "mySelect");
		myDiv.appendChild(selectList);
		
		for (var i = 0; i < array.length; i++) {
		var option = document.createElement("option");
		option.setAttribute("value", array[i]);
		option.text = array[i];
		selectList.appendChild(option);
}
	</script>
</body>
</html>
