<?php 
	include_once 'db_connect.php';

	$uid = mysqli_real_escape_string($conn,$_POST['username']);
	$pass1 = mysqli_real_escape_string($conn,$_POST['password']);

	//Check if inputs are empty
	if(empty($uid) || empty($pass1)){
		$login_error="Do not leave blank fields!";
	} 
	else{

	}
	// else{
	// 	header("Location: ".g"?login=error");
	// }

?>