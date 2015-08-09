<!Doctype html>
<html>
	<head>
		<title>Add Subject</title>
		<link rel="stylesheet" href="views/css/registrationStyle.css">
	</head>
	<body>
        <div align="center">
		<div align="center" class="div1">
			<form action="http://ConfirmRegistration.php" method="post">                   <br>
                <table>
                    <tr>
                        <td>
                            <fieldset class="fieldset1">
                                <legend class="rflegend">Personal Information</legend>
                                <div align="left"  class="div2">
                                    <p class="p1">
                                        <label class="p1label" id="">Full Name:</label><br>
                                        <input class="p1text" id="" type="text" name="name" required autofocus><br><br>
                                        <label class="p1label" id="">Gender:</label><br><br>
                                            <input class="p1label" id="" type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female"> Female <br><br>
                                        <label class="p1label" id="">Blood Group:</label><br>
                                        <input class="p1text" id=""type="text" name="bloodGroup" required><br><br>
                                        <label class="p1label" id="">Nationality:</label><br>
                                        <input class="p1text" id=""type="text" name="nationality" required><br><br>
                                        <label class="p1label" id="">Present Address:</label><br>
                                        <textarea class="p1text" id="addressArea" name="presentAddress" required></textarea><br><br>
                                        <label class="p1label" id="">Email:</label><br>
                                        <input class="p1text" id=""type="text" name="email" required><br><br>
                                        <label class="p1label" id="">Mobile No:</label><br>
                                        <input class="p1text" id=""type="text" name="mobile" required><br><br>
                                        <label class="p1label" id="">User Name:</label><br>
                                        <input class="p1text" id=""type="text" name="username" required><br><br>
                                        <label class="p1label" id="">Create a Password:</label><br>
                                        <input class="p1text" id=""type="password" name="password" required><br><br>
                                    </p>
                                </div><br>
                            </fieldset>
                        </td>
                        <td class="gurdianCol">
                            <fieldset class="fieldset2">
                                <legend class="rflegend">Guardian Information</legend>
                                <div align="left"  class="div2">
                                    <p class="p2">
                                        <label class="p1label" id="">Full Name:</label><br>
                                        <input class="p1text" id="" type="text" name="gurdianName" required autofocus><br><br>
                                        <label class="p1label" id="">Mobile No:</label><br>
                                        <input class="p1text" id=""type="text" name="mobile" required><br><br>
                                        <label class="p1label" id="">Present Address:</label><br>
                                        <textarea class="p1text" id="addressArea" name="presentAddress" required></textarea><br><br>
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
