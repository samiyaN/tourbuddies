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
			.createTourSubmit
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
			
			<form class="createTourSubmit">
				<h1>Tour Created</h1> <br>
				<?php
					$location = $_POST['location'];
					$tourType = $_POST['tourType'];
					$maxPeople = $_POST['maxPeople'];
					$description = $_POST['description'];
					$fee = $_POST['fee'];
					$contact = $_POST['contact'];
				
				?>
				<b>Place  :</b> <?php  echo $location; ?> <br>
				<b>Tour Type :</b> <?php  echo $tourType; ?> <br>
				<b>People   :</b> <?php  echo $maxPeople; ?> <br>
				<b>About The Tour :</b> <?php  echo $description; ?> <br>
				<b>Fee :</b> <?php  echo $fee; ?> <br>	
				<b>Contact :</b> <?php  echo $contact; ?> <br>
				
				<tr>
					<td colspan="2" align="center">
					<input type="button"class="edit" onclick="window.location.href = 'createTour.php';" name="edit" value="Edit">
						
					</td>
				</tr>
			
			</form>
	</body>
</html>