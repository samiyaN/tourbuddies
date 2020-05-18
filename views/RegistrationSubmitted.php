<html>
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
		</style>
			<form class="loginSubmit">
				<h1>User Information</h1> <br>
				<?php session_start();  ?>
				<b>First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php if(!empty($_SESSION['fname'])){  echo $_SESSION['fname'];  } ?> <br>
				<b>Last Name  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php  if(!empty($_SESSION['lname'])){  echo $_SESSION['lname'];  } ?> <br>
				<b>User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php if(!empty($_SESSION['uname'])){  echo $_SESSION['uname'];  } ?> <br>
				<b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php if(!empty($_SESSION['email'])){  echo $_SESSION['email'];  } ?> <br>
				<b>Phone Number &nbsp;:</b> <?php  if(!empty($_SESSION['phone'])){  echo $_SESSION['phone'];  } ?> <br>
				<b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp :</b> <?php  if(!empty($_SESSION['gender'])){  echo $_SESSION['gender'];  } ?> <br>
				<b>Role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b> <?php  if(!empty($_SESSION['role'])){  echo $_SESSION['role'];  } ?> <br>
			</form>
	</body>
</html>
















