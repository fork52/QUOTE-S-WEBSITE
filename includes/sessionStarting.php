<?php 

  session_start();

  if(isset($_SESSION['loginMessage'])){
    echo "<script>alert('" . $_SESSION['loginMessage']."'); </script>";
    //to not make the error message appear again after refresh:
    unset($_SESSION['loginMessage']);
	}

?>
