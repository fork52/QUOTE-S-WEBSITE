<?php 
	include_once 'db_connect.php';

	$uid = mysqli_real_escape_string($conn,$_POST['username']);
	$pass1 = mysqli_real_escape_string($conn,$_POST['password']);

	//Check if inputs are empty

	// echo "Here inside login Action.  ".$uid." ".$pass1;

	if(empty($uid) || empty($pass1)){
		$login_error="Do not leave blank fields!";
		// echo "<br>Came here";
	} 
	else{
		// echo "<br>Came here";
		$sql_query2 ="SELECT * FROM users WHERE user_name=?";

		$stmt= mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql_query2)){
			// echo "<br>Statement not prepared";
			header("Location:../home/index.php?error=Invalidfields");
			exit();
		}
		else{

			// echo "<br>Statement prepared!";

			mysqli_stmt_bind_param($stmt,"s",$uid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($pass1,$row['pwd']);
				if($pwdCheck==False){
					// echo "<br>Password verification unsuccessful";
					$login_error="Wrong password";
					// echo $login_error;
					header("Location:../home/index.php?error=Wrongpassword");
					exit();
				}
				else if($pwdCheck==True){

					session_start();
					$_SESSION['user_id']=$row['user_id'];
					$_SESSION['user_name']=$row['user_name'];
					header("Location:../home/index.php?login=Success");
					exit();
				}
			}
			else{
				//No username
				$login_error="Username does not exist";
				// echo $login_error;
				header("Location:../home/index.php?error=usernameNotExists");
				exit();
			}
		}
	}

// echo "<br>Exits here finally";
exit();

?>