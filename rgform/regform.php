<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="formstyle.css">
		<link href="../loginForm/loginStyle.css" rel="stylesheet" />

	</head>

	<body>


	 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
		      <div class="navbar-header">
		        
		        <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#navbar-collapse-main">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
	       		</button>

		        <a class="navbar-logo" href="#">
		          <img src="../img/logo.png" width="70" height="50">
		        </a>

		      </div>


<?php include "../includes/header_links.php" ?>


		  </div>
	  </nav>


	<br> <br> <br> <br> <br> 

	<div class="NEWFONT">
		<div class="wrapper" style="background-image: url('images/home.jpg');">

			<div class="inner">
				<div class="image-holder">
					<img src="images/q3.jpg" alt="" >
				</div>
				<!-- INCLUDING formelements.php -->
				<?php
					include "formelements.php";
				?>
			</div>
		</div>
	</div>
		

	<br> <br> <br>

	<?php include "../includes/footer.php" ?>

	<?php include "../loginForm/loginReg.php" ?>

	</body>
</html>