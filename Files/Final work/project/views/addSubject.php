<!Doctype html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="css/addSubjectStyle.css">
	</head>
	<body>
        <div align="center">
		<div align="center" class="div1">
			<form action="ConfirmSubjectAddition.php" method="post">                   <br>
                <table>
                    <tr>
                        <td>
                            <fieldset class="fieldset1">
                                <legend class="rflegend">Subject Addition</legend>
                                <div align="left"  class="div2">
                                    <p class="p1">
                                        <label class="p1label" id="">Course Id:</label><br>
                                        <input class="p1text" id="" type="text" name="course_id" required autofocus><br><br>
                                        <label class="p1label" id="">Discipline Name:</label><br>
                                        <input class="p1text" id="" type="text" name="discipline_name" required><br><br>
                                        <label class="p1label" id="">Course Name:</label><br>
                                        <input class="p1text" id="" type="text" name="course_name" required><br><br>
                                        <label class="p1label" id="">Is open:</label><br>
                                        <input class="p1text" id=""type="checkbox" name="is_open" value="true"><br><br>
                                        <label class="p1label" id="">Total Capacity:</label><br>
                                        <input class="p1text" id="" type="text" name="total_capacity" required><br><br>
                                        <label class="p1label" id="">Filled Number:</label><br>
                                        <input class="p1text" id="" type="text" name="filled_number" required><br><br>
                                        <label class="p1label" id="">Duration:</label><br>
                                        <input class="p1text" id="" type="text" name="duration" required><br><br>
                                        <label class="p1label" id="">Start Time:</label><br>
                                        <input class="p1text" id="" type="text" name="start_time" required><br><br>
                                        <label class="p1label" id="">End Time:</label><br>
                                        <input class="p1text" id="" type="text" name="end_time" required><br><br>
                                        <label class="p1label" id="">Day:</label><br>
                                        <input class="p1text" id="" type="text" name="day" required><br><br>
                                        <label class="p1label" id="">Room:</label><br>
                                        <input class="p1text" id="" type="text" name="room" required><br><br>
                                        <label class="p1label" id="">Section:</label><br>
                                        <input class="p1text" id="" type="text" name="sec" required><br><br>
                                    </p>
                                </div><br>
                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <td><input class="fsubmit" type="submit" value="Register"><br><br></td>
                    </tr>
                </table>

            </form>
		</div>
        </div>
	</body>
</html>
