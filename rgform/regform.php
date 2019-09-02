<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">

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


	      <div class="collapse navbar-collapse" id="navbar-collapse-main">
	        <ul class="nav navbar-nav navbar-right">

	          <li><a  href="../index.php">HOME </a></li>
	          <li><a href="#">PROFILE </a></li>
	          <li><a  href="#">AUTHORS </a></li>
	          <li><a class="active" href="#">REGISTER </a></li>
	          <li><a  href="#">LOGIN </a></li>
	          <li><a  href="../aboutus/aboutus.html">ABOUT </a></li>

	        </ul>
	      </div>
	  </div>
	  </nav>


	<br> <br> <br> <br> <br> 
	<div class="NEWFONT">
		<div class="wrapper" style="background-image: url('images/home.jpg');">


			<div class="inner">
				<div class="image-holder">
					<img src="images/q3.jpg" alt="" >
				</div>

				<form action="">
					<h3>Registration Page</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control">
						<input type="text" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
	</div>
		

	<br> <br> <br>

		<footer class="container-fluid text-center">
		  <div class="row">
		    <div class="col-sm-4">
		      <h3>Contact us</h3> 
		      <br>
		      <h4>Email us at: random@gmail.com </h4>
		      <h4>Address: afdsgdsg </h4>
		    </div>

		     <div class="col-sm-4">
		      <h3>Connect With</h3>
		      <a href="#" class="fa fa-facebook"></a>
		      <a href="#" class="fa fa-twitter"></a>
		      <a href="#" class="fa fa-google"></a>
		      <a href="#" class="fa fa-linkedin"></a>
		      <a href="#" class="fa fa-youtube"></a>

		    </div>

		    <div class="col-sm-4">
		      <img src = "../img/logo.png" class="icon" width="90" height="50">
		    </div>
		  </div>
		</footer>
	</body>
</html>