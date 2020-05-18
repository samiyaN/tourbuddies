<html>
	<head>
		<style>
		body
			{
				background:url('images/nafakhum.jpg');
				background-size:100%;
				background-repeat:no-repeat;
				margin:0;
				padding:0;
				font-family:Arial;
			}
			.contactForm
			{
				border-radius:20px;
				right: 0;
				margin: auto;
				max-width: 800px;
				padding: 20px;
				background-color: white;
				margin-top: 40px;
				text-align:center;
			}
			h2
			{
				margin:0 0 30px 0;
				padding:10px;
				color:rgb(55,90,47);
				text-align:center;
			}
			p
			{
				margin:0 0 30px 0;
				padding:05px;
				color:rgb(55,90,47);
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
			* 
			{
			  box-sizing: border-box;
			}

			body 
			{
			  font-family: Arial, Helvetica, sans-serif;
			}

			
			.column
			{
			  float: left;
			  width: 25%;
			  padding: 0 10px;
			}

			.row 
			{
				margin: 0 -5px;
			}

			.row:after
			{
			  content: "";
			  display: table;
			  clear: both;
			}

			@media screen and (max-width: 600px)
			{
			  .column 
			  {
				width: 100%;
				display: block;
				margin-bottom: 20px;
			  }
			}

			.card
			{
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			  padding: 16px;
			  text-align: center;
			  background-color: #f1f1f1;
			}
		</style>
	</head>
		<body>
			<form method="POST" action="" class="contactForm">

			<h2>CONTACTS</h2>
			<p>Here is all the information about the tour managers :</p>

			<div class="row">
			  <div class="column">
				<div class="card">
				  <h3>Manager 1</h3>
				  <p>Handle the tour of Cox's Bazar</p>
				  <p>Phone No : 01*********</p>
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				  <h3>Manager 2</h3>
				  <p>Handle the tour of Sylhet</p>
				  <p>Phone No : 01*********</p>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				  <h3>Manager 3</h3>
				  <p>Handle the tour of Saint Martin</p>
				  <p>Phone No : 01*********</p>
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				  <h3>Manager 4</h3>Handle the tour of Bandarban</p>
				  <p>Phone No : 01*********</p>
				</div>
			  </div>
			</div>
			<br>
			<input type="button" onclick="window.location.href = 'home.php';" name="home" value="Home">
			</form>
		</body>
</html>
