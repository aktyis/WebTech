<!Doctype html>
<html>
	<head>

		<title>Login</title>
		<link rel="stylesheet" href="views/css/homeStyle.css">
	</head>
	<body >
		<div align="center">
			<div align="center" class="div2">
				<div align="left" class="div3"><br>
					<form action="http://google.com/search" method="get">
					<a class="alink" id="hlink" href="home_view.php">Home</a>
					<a class="alink" id="falink" href="home_view.php">Faculty</a>
					<a class="alink" id="stlink" href="home_view.php">Student</a>
					<a class="alink" id="adlink" href="home_view.php">Admission</a>
					<a class="alink" id="oflink" href="home_view.php">Offices</a>
					<a class="alink" id="relink" href="home_view.php">Research</a>
					<a class="alink" id="allink" href="home_view.php">Alumni</a>
					<a class="alink" id="colink" href="home_view.php">Contact</a>
					<input class="searchText" type="text" name="q" required placeholder="Search Google">
					<input class="searchBut" type="submit" value="Search">
					</form>
				</div><br><br>
				<div align="left" class="div4"><br>
					<a class="alink" href="mainHome.html"><img id="imlink" src="images/univLogo.png" alt="University" title="Engineering University of Bangladesh"></a>
					<a class="alink" id="nalink" href="home_view.php">Engineering University of Bangladesh</a>
					<a class="alink" id="lolink" href="loginForm.php">Login</a>
				</div>

				<div align="right" class="div5"><br><br>

					<form action="views/confirmlogin.php" method="POST">
						<div align="left" class="div6"><br>
						<label class="loginlabel">Sign In with your username & password</label><br>
							<div class="div7">
								<p clas="loginpara">
									<label class="llabel" >User Name:</label><br><br>
									<input class="ltext" type="text" name="username" autofocus required ><br><br>
									<label class="llabel" >Password:</label><br><br>
									<input class="ltext" type="password" name="password" required><br><br>
									<a class="alink" id="fplink" href="../js/forgetPass.js">Forgot Password?</a>
								</p>
								<input class="signBut" type="submit" value="Sign In">
							</div>
						</div><br>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
