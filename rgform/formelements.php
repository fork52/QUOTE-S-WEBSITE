<?php 

//VARIABLES FOR STORING DATA 
$fname=$lname=$uname=$email=$gender=$pass1=$pass2="";

$errormsg="* "; //TO DISPLAY THE ERROR AT THE END OF THE STRING

if ($_SERVER["REQUEST_METHOD"] == "POST"){
				
	$fname =$_POST["fname"];
	$lname =$_POST["lname"];
	$email =$_POST["emailId"];
	$gender=$_POST["Gender"];


	$errormsg= $errormsg.$gender."<br>";

	if(!preg_match("/^[a-zA-Z'-]+$/",$fname)){
			$errormsg= $errormsg."<i>Invalid First Name</i>";
	}

	else if(!preg_match("/^[a-zA-Z'-]+$/",$lname)){
			$errormsg= $errormsg."<i>Invalid Last Name</i>";
	}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errormsg= $errormsg."<i>Invalid Email Format</i>";
	}

	if ($gender="") {
		$errormsg= $errormsg."<br><i>Invalid Email Format</i>";
	}


}	

?>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

					<h3>Registration Page</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" name="fname" 
						value="<?php echo $fname;?>">

						<input type="text" placeholder="Last Name" class="form-control" name="lname"  
						value="<?php echo $lname;?>">
					</div>

					<div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>

					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="emailId"  value="<?php echo $email;?>">
						<i class="zmdi zmdi-email"></i>
					</div>


					<div class="form-wrapper">
						<select name="Gender" id="" class="form-control">
							<option value="" >Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
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
					<br>

					<p id="ER"><?php echo "$errormsg" ?><p>
				</form>