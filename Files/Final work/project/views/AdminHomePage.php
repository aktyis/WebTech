<!Doctype html>
<html>
	<head>
		<title>Employee</title>
		<link rel="stylesheet" href="css/homeStyle.css">
	</head>
	<body >
		<div align="center" class="div1">
			<div align="center" class="div2">
				<div align="left" class="div3"><br>
					<form action="" method="get">
						<label id="adminHomeLogo">E U B</label>
					<a class="alink" id="hlink" href="AdminHomePage.php" style="margin-left: 30em;">Home</a>
					<a class="alink" id="falink" href="">Profile</a>
					<a class="alink" id="stlink" href="">Change Password</a>
					<a class="alink" id="adlink" href="logout.php">Logout</a>
					</form>
				</div><br><br>
			</div>
        </div>
        <div align="center">
            <div align="center" style="width:1100px; height:800px;" >
            <table align="left" style="width:1100px; height:800px;">
                <tr>
                    <td style="width:180px; border:1px; vertical-align: top; text-align: left;">
                        <label id="academic">Academic</label><br>
                        <a class="adblink" id="calink" href="">Courses</a><br><br>
                        <a class="adblink" id="cstlink" href="">Class Schedule</a><br><br>
                        <a class="adblink" id="relink" href="">Registration</a><br><br>
                        <label id="academic">Library</label><br>
                        <a class="adblink" id="sblink" href="">Search Book</a><br><br>
                        <a class="adblink" id="cbtlink" href="">Current Borrows</a><br><br>
                        <a class="adblink" id="bhlink" href="">Borrow History</a><br><br>
                        <label id="academic">Administrative</label><br>
                        <a class="adblink" id="aslink" href="">Student List</a><br><br>
                        <a class="adblink" id="aslink" href="registrationForm.php">Add Student</a><br><br>
                        
                    </td>
                    <td style="width:700px; border:1px solid green; vertical-align: top; text-align: left; margin-left: 2em;">
                        <label id="academic">Routine</label><br>
                    </td>
                    <td style="width:200px; border:1px; vertical-align: top; text-align: center;">
                        <label id="academic"></label>
						<?php
							require 'dbconnect.php';
							$get_id="1111-111-11";
							$sql= "SELECT * FROM faculties WHERE user_id='$get_id'";
							if($result = mysqli_query($db_connect, $sql))
							{
								if(mysqli_num_rows($result) > 0)
								{
									while($row = mysqli_fetch_array($result))
									{
										
										$fid = $row["user_id"];
										$fname = $row["name"];
									}
								}
							}
							echo"<h3>$fname <br> $fid</h3>";
                        ?>
                    </td>
                </tr>
            </table>
            </div>
        </div>
	</body>
</html>