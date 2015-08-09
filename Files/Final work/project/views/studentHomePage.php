<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="css/studentHomePage.css">
	<script>
	var myDiv = document.getElementById("semesterSelectTag");
	
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
</head>
<body class="body-Property">
<div>
	<table class="tableFullPage">	
			<td class="fisrtColoumn">
				Academics: 
				<br>
				<a href="">Course & Result</a> 
				<br>
				<a href="">Financial</a>
				<br>
				<a href="">library</a>
				<br>
				<a href="">Curriculam</a>
			</td> 
			<td class="secondColoumn">
			<div>
				<form>
					<fieldset class="fieldsetClassSchedule">
					<table class="tableUnderFieldset">
					<td class="DayColoum">
					zafuu
					<br>
					ilu
					</td>
					<td>calender </td>
					</table>
					<legend class="legendClassSchedule">Class Schedule</legend>
					</fieldset>
				</form>
			</div>
			<div>
				<form>
					<fieldset class="registrationField">
					<div class="semesterDropDownList" id="semesterSelectTag"></div>
					<legend class="registrationLegend">Registration</legend>
					</fieldset>
				</form>
			</div>
			</td>
				
			<td class="thirdColoumn">
			<input type=submit value="Pre-Registration">
			</td>	
	</table>
</div>
</body>
</html>