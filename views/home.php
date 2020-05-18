<html>
	<head>
		<title>Home</title>
	</head>
			<style>
		body 
		{
		  background:rgb(107,142,35);
		  background-size:1200px 500px;
		  background-repeat:no-repeat;
		  margin:0;
		  padding:0;
		  font-family:Arial;
		}

		.topnav 
		{
		  overflow: hidden;
		  background-color: #333;
		}
		.login
		{
			margin-left:800px;
		}
		.topnav a 
		{
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover 
		{
		  background-color: rgb(75,150,30);
		  color: black;
		}
		input[type=button]
		{
			border:none;
			outline:none;
			color:#fff;
			font-size:16px;
			font-family:Arial;
			background:rgb(55,90,47);
			cursor:pointer;
			border-radius:20px;
			margin-top: 40px;
			margin-bottom: 40px;
			
		}
		input[type=button]:hover
		{
			background:rgb(173,255,47);
			color:#000000;
		}
		.explore
		{
			padding:12px;
			padding-left:65px;
			padding-right:60px;
			margin-left: 400px;
		}
		.photobooth
		{
			padding:12px;
			padding-left:20px;
			padding-right:50px;
			margin-left: 80px;
		}
		b
		{
			color:#fff;
			font-size:80px;
			margin-left:350px;
			margin-top:350px;
			padding-top:80px;
		}
		.logo
		{
			
			padding-left:520px;
		}
					
		</style>
		</head>
		<body>

		<div class="topnav">
		  <a class="active" href="#home">Home</a>
		  <a class="event" href="event.php">Events</a>
		  <a class="contact" href="contact.php">Contact</a>
		  <a class="about" href="about.php">About Us</a>
		  <a class="login" href="LogIn.php">Log In</a>
		  <a class="signup" href="Registration.php">Sign Up</a>
		</div>

		<div class="slideshow-container">
			<b>TOUR BUDDIES</b>
			<br>
			<tr>
				<td ><img src="images/travel.png" class="logo" alt="logo" style="width:20%"></td>
			</tr>
			<br>
			<tr>
				<td colspan="2" align="center">
					<input type="button" class="explore" onclick="window.location.href = 'event.php';" name="explore" value="EXOPLORE">
					<input type="button" class="photobooth"onclick="window.location.href = 'photobooth.php';" name="photobooth" value="	PHOTOBOOTH">
				</td>
			</tr>
			  


		</div>
		</body>
</html>