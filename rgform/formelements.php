<?php 

//VARIABLES FOR STORING DATA 
$fname=$lname=$uname=$email=$gender=$pass1=$pass2="";

$errormsg=""; //TO DISPLAY THE ERROR AT THE END OF THE STRING
$errorStatus=False;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
				
	$fname =$_POST["fname"];
	$lname =$_POST["lname"];
	$email =$_POST["emailId"];
	$gender=$_POST["Gender"];
	$pass1 =$_POST["password1"];
	$pass2 =$_POST["password2"];

	// $errormsg= $errormsg."<br><i>*Gender=</i>".$gender;	

	if(!preg_match("/^[a-zA-Z'-]+$/",$fname)){
			$errormsg= $errormsg."<br><i>*Invalid First Name</i>";
			$errorStatus=True;
	}

	if(!preg_match("/^[a-zA-Z'-]+$/",$lname)){
			$errormsg= $errormsg."<br><i>*Invalid Last Name</i>";
			$errorStatus=True;
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errormsg= $errormsg."<br><i>*Invalid Email Format</i>";
			$errorStatus=True;
	}

	if (strlen($gender)<2) {
		$errormsg= $errormsg."<br><i>*Gender not selected.</i>";
		$errorStatus=True;
	}

	if($pass1=="" or $pass2==""){
		$errormsg = $errormsg."<br><i>*Don't leave blank password.</i>";
		$errorStatus=True;
	}
	else if($pass1!=$pass2 and $pass1!=""){
		$errormsg = $errormsg."<br><i>*Passwords do not match</i>";
		$errorStatus=True;
	}

}	//End of post method


// End of p tag
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<h3>Registration Page</h3>
		<div class="form-group">
			<!-- First name field-->
			<input 	 id="here"
					 type="text" 
					 placeholder="First Name" 
					 class="form-control" 
					 name="fname" 
					 value="<?php echo $fname;?>"
			>
			<!-- Last name field-->
			<input 	 type="text"
					 placeholder="Last Name" 
					 class="form-control" 
					 name="lname"  
					 value="<?php echo $lname;?>"
			>
		</div>

		<div class="form-wrapper">
			<!-- Username -->
			<input  type="text" 
					placeholder="Username" 
					class="form-control"
			>
			<i class="zmdi zmdi-account"></i>
		</div>

		<div class="form-wrapper">
			<!-- Email Address -->
			<input 	type="text" 
					placeholder="Email Address" 
					class="form-control" name="emailId"  
					value="<?php echo $email;?>"
			>
			<i class="zmdi zmdi-email"></i>
		</div>


		<div class="form-wrapper">
			<!--Gender Select  -->
			<select name="Gender" id="" class="form-control ">
				<option value="">Gender</option>

				<option value="male"<?php if (isset($gender) && $gender=="male") echo "selected";?>>
				Male
				</option>

				<option value="female" <?php if (isset($gender) && $gender=="female") echo "selected";?>>Female
				</option>

				<option value="other" <?php if (isset($gender) && $gender=="other") echo "selected";?>>Other
				</option>

			</select>
			<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
		</div>

		<div class="form-wrapper">
			<!-- Password -->
			<input type="password" placeholder="Password" class="form-control"
			name="password1">
			<i class="zmdi zmdi-lock"></i>
		</div>

		<div class="form-wrapper">
			<!--Confirm Password -->
			<input 	type="password" 
					placeholder="Confirm Password" 
					class="form-control" 
					name="password2"
			>
			<i class="zmdi zmdi-lock"></i>
		</div>

		<button onClick=”bookmark()” >
			Register
			<i class="zmdi zmdi-arrow-right"></i>
		</button>

		<br>
		<p id="ER"><?php echo "$errormsg" ?><p> <--ERROR message to be displayed

	</form>




