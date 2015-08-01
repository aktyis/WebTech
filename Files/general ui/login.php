<!Doctype html>
<html>
	<head>
		<title>Login</title>
	</head>
	
	<style>
		#limg
		{
			margin-left: 2em;
		}
		#hlink
		{
			margin-left: 2em;
			font-weight:bold; 
			font-size:20px;
		}
		#allink
		{
			margin-left: 2em;
		}
		#adlink
		{
			margin-left: 2em;
		}
		#relink
		{
			margin-left: 2em;
		}
		#falink
		{
			margin-left: 2em;
		}
		#stlink
		{
			margin-left: 2em;
		}
		#colink
		{
			margin-left: 2em;
		}
		#oflink
		{
			margin-left: 2em;
		}
		#aclink
		{
			color: rgb(100,280,550);
		}
		a:link 
		{
			color: rgb(200,200,220);
			background-color: transparent;
			text-decoration: none;
		}
		a:visited 
		{
			color: rgb(200,200,220);
			background-color: transparent;
			text-decoration: none;
		}
		a:hover 
		{
			color: rgb(100,280,550);
			background-color: transparent;
			text-decoration: underline;
		}
		
		#nalink
		{
			color: rgb(100,150,550);
			font-weight:bold; 
			font-size:30px;
		}
		#nalink:hover 
		{
			color: rgb(100,150,550);
			background-color: transparent;
			text-decoration: none;
		}
	</style>
	
	<body style="background-color: rgb(200,200,220)">
		
		<div align="center">
			<div align="center" style="width:1100px;height:220px; border:1px">
				<div align="left" style="width:1100px;height:55px;background-color:black"><br>
					<form action="http://google.com/search" method="get">
					<a id="hlink" href="mainHome.html">Home</a>
					<a id="falink" href="mainHome.html">Faculty</a>
					<a id="stlink" href="mainHome.html">Student</a>
					<a id="adlink" href="mainHome.html">Admission</a>
					<a id="oflink" href="mainHome.html">Offices</a>
					<a id="relink" href="mainHome.html">Research</a>
					<a id="allink" href="mainHome.html">Alumni</a>
					<a id="colink" href="mainHome.html">Contact</a>
					<input style="width: 180px; height:20px; margin-left: 10em;" type="text" name="p" required placeholder="Search Google">
					<input style="width: 60px; height:28px; margin-left: -0.3em;" type="submit" value="Search">
					</form>
				</div><br><br>
				<div align="left" style="width:1100px;height:150px;background-color:gray"><br>
					<a href="mainHome.html"><img id="limg" src="images/univLogo.png" alt="University" style="width:180px; height:120px"></a>
					<a id="nalink" href="mainHome.html">Engineering University of Bangladesh</a>
				</div>
				
				<div align="right" ><br><br>
			<label style="color:green;">Sign In with your username & password</label><br><br>
			<form action="ConfirmLogin.php" method="post">
				<div align="left" style="width:400px;height:280px;border:1px; background-color: rgb(100,130,150)">
					<div style="margin-left: 2em;>
						<p id="p2"><br>
							<label style="font-weight:bold">User Name:</label><br><br>
							<input style="width:200px; height:25px" type="text" name="username" required><br><br>
							<label style="font-weight:bold">Password:</label><br><br>
							<input style="width:200px; height:25px" type="password" name="password" required><br><br>
							<a id="aclink" href="login.php">Forgot Password?</a>
						</p>
						<input style="color:blue; height:30px; font-weight:bold" type="submit" value="Sign In">
					</div>
				</div><br>
			</form>
		</div>
				
			</div>
		</div>
	</body>
</html>