<html>
	<head>
		<title>Manager Profile</title>
	</head>
		<body>
			<style>
				body
				{
					background:url('images/background.jpg');
					background-size:1500px 1000px;
					background-repeat:no-repeat;
					margin:0;
					padding:40px;
					font-family:Arial;
				}	
				.loginSubmit
				{
					border-radius:20px;
					right: 0;
					margin: auto;
					max-width: 500px;
					padding: 25px;
					background-color: white;
					margin-top:80px;
							
				}
				h1
				{
					margin:30px 0 0 0;
					padding:20px;
					color:rgb(55,90,47);
					text-align:center;
				}
				b
				{
					width: 100%;	
					border:none;
					outline:none;
					margin:30px 0 0 0;
					padding:20px;
					color:#000000;
					text-align:center;
				}
				input[type=button]
					{
						
						border:none;
						outline:none;
						padding:8px;
						padding-left:50px;
						padding-right:50px;
						color:#fff;
						font-size:16px;
						font-family:Arial;
						background:rgb(55,90,47);
						cursor:pointer;
						border-radius:20px;
						margin-top: 16px;
						margin-left: 20px;
					}
					input[type=button]:hover
					{
						background:rgb(75,150,30);
						color:#ffffff;
					}
			</style>
				<form class="loginSubmit">
					<h1>Manager Information</h1> <br>
					<?php session_start();  ?>
					<b>First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php if(!empty($_SESSION['fname'])){  echo $_SESSION['fname'];  } ?> <br>
					<b>Last Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php  if(!empty($_SESSION['lname'])){  echo $_SESSION['lname'];  } ?> <br>
					<b>User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php if(!empty($_SESSION['uname'])){  echo $_SESSION['uname'];  } ?> <br>
					<b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php if(!empty($_SESSION['email'])){  echo $_SESSION['email'];  } ?> <br>
					<b>Phone Number &nbsp;:</b> <?php  if(!empty($_SESSION['phone'])){  echo $_SESSION['phone'];  } ?> <br>
					<b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp :</b> <?php  if(!empty($_SESSION['gender'])){  echo $_SESSION['gender'];  } ?> <br>
					<b>Role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php  if(!empty($_SESSION['role'])){  echo $_SESSION['role'];  } ?> <br>
					<tr>
						<td colspan="2" align="center">
							<input type="button" onclick="window.location.href = 'Registration.php';" name="edit" value="EDIT">
						</td>
					</tr>
				</form>
		</body>
</html>
















