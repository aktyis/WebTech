<!Doctype html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/homeStyle.css">
	</head>
	<body >
		<div align="center">
			<div align="center" class="div2">
				<div align="left" class="div3"><br>
					<form action="http://google.com/search" method="get">
					<a class="alink" id="hlink" href="mainHome.html">Home</a>
					<a class="alink" id="falink" href="mainHome.html">Faculty</a>
					<a class="alink" id="stlink" href="mainHome.html">Student</a>
					<a class="alink" id="adlink" href="mainHome.html">Admission</a>
					<a class="alink" id="oflink" href="mainHome.html">Offices</a>
					<a class="alink" id="relink" href="mainHome.html">Research</a>
					<a class="alink" id="allink" href="mainHome.html">Alumni</a>
					<a class="alink" id="colink" href="mainHome.html">Contact</a>
					<input class="searchText" type="text" name="p" required placeholder="Search Google">
					<input class="searchBut" type="submit" value="Search">
					</form>
				</div><br><br>
				<div align="left" class="div4"><br>
					<a class="alink" href="mainHome.html"><img id="imlink" src="images/univLogo.png" alt="University" title="Engineering University of Bangladesh"></a>
					<a class="alink" id="nalink" href="mainHome.html">Engineering University of Bangladesh</a>
				</div>
				
				<div align="right" class="div5"><br><br>
					<label class="loginlabel">Sign In with your username & password</label><br>
					<form action="ConfirmLogin.php" method="post">
						<div align="left" class="div6">
							<div class="div7">
								<p clas="loginpara"><br>
									<label class="llabel" >User Name:</label><br><br>
									<input class="ltext" type="text" name="username" required><br><br>
									<label class="llabel" >Password:</label><br><br>
									<input class="ltext" type="password" name="password" required><br><br>
									<a class="alink" id="fplink" href="login.php">Forgot Password?</a>
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