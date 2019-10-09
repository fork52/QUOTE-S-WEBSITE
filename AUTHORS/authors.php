<?php 
	//Connecting to a dabase
	$dbServername = "localhost";
	$dbUsername   = "root";
	$dbPassword   = "";
	$dbName 	  =	"loginSystem";


	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

	// if ($conn->connect_error) {
	// 	    die("Connection failed: " . $conn->connect_error);
	// }

	// else
	// 	echo "<br>Connected successfully<br>";


	// else{
			
	// 	echo "<br><br>No author_selected!!";
	// }




?>

<!DOCTYPE html>
<html>
<head>
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<!--   <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"> --></script>
  <script src="../BS/js/jquery.min.js"></script>
  <script src="../BS/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../BS/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="scrollStyle.css">
  <link rel="stylesheet" href="authorCard.css">
 

  <title>Quote's Website</title>


 </head>

 <body>

<?php include "../includes/sessionStarting.php" ?>

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
  <?php include "../includes/db_connect.php" ?>
	  </div>

  </nav>

  <br><br><br><br><br><br>

	<?php 
		echo "<div class=\"container\">";
	?>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<?php
		



		$sql_authors = "SELECT DISTINCT quote_author FROM quotes ORDER BY quote_author";
		$result = mysqli_query($conn,$sql_authors);
		$resultCheck = mysqli_num_rows($result);

		// echo "<br><br>NO OF ROWS FETCHED=".$resultCheck."<br><br>";

		//Name of select option is authorName
		echo "	<select name=\"authorName\"class=\"select-css\" unselected >";

		echo "  <option value=\"\" selected disabled hidden>Choose Author</option>"; //Default UNSELECETED OPTION

		if($resultCheck>0){
				while ( $row = mysqli_fetch_assoc($result)) {
					   
					$author_name=$row["quote_author"];  //Var holding author name
					echo "<option value=\"".$author_name."\">".$author_name."</option>";

					}//while
			}//if

		echo "	</select> ";

		echo "<center><br><br><br><button class=\"myButton\" name=\"submit\" type=\"submit\"> FIND QUOTES </button></center>";
		echo "</form></div>";
	 ?>	
	 <br><br><br>
 


	<link href="https://fonts.googleapis.com/css?family=Roboto:300:400:700" rel="stylesheet">

	<!-- start  of cards code -->
	<div class="cards clearfix"> 
	<?php 

	if(isset($_POST['authorName']) and $_SERVER["REQUEST_METHOD"] == "POST") {

	    $author_selected = $_POST['authorName']; 


	    // echo "<br><br>The option selected was ".$author_selected ."<br><br><br>";

	    $sql_author_quotes = "SELECT DISTINCT quote_text FROM quotes WHERE quote_author='".$author_selected."'
	    ORDER BY rand();";
		$result1 = mysqli_query($conn,$sql_author_quotes);
		$resultCheck1= mysqli_num_rows($result1);
		$total_rows = $resultCheck1;

		echo "<br>The author selected was ".$author_selected."<br>";
		echo "<br>No of rows=".$resultCheck1."<br>";




		if($resultCheck1>0){

			//col1
			echo "<div class=\"card-col-1\">"; //start of first column
			for ($i=1; $i <=ceil($total_rows/3) ; $i++) { 
				    $randomImageHeight = rand(240, 340);  //Image heright
				    $relation = 280/$randomImageHeight;
				    $padding = 100/$relation;
				    $rand_no =mt_rand()/ mt_getrandmax();


				    $row1 = mysqli_fetch_assoc($result1);
				    $quote_text=$row1["quote_text"];

				    echo "<div class=\"card\">";
				    echo "<div class=\"top\" style=\"padding-bottom:".$padding."%\">";

				    echo "<img src=\"https://www.unsplash.it/280/".$randomImageHeight."/?random&sig=".$rand_no."\"> ";

				    echo "</div>";

				    echo "<div class=\"bottom\">";

				    echo "<p>".$quote_text."</p>";

				    echo "</div></div>";

			}
			echo "</div>";


			//col2
				echo "<div class=\"card-col-2\">"; //start of first column
			for ($i=1; $i <=round($total_rows/3) ; $i++) { 
				    $randomImageHeight = rand(240, 340);  //Image heright
				    $relation = 280/$randomImageHeight;
				    $padding = 100/$relation;
				    $rand_no =mt_rand()/ mt_getrandmax();


				    $row1 = mysqli_fetch_assoc($result1);
				    $quote_text=$row1["quote_text"];

				    echo "<div class=\"card\">";
				    echo "<div class=\"top\" style=\"padding-bottom:".$padding."%\">";

				    echo "<img src=\"https://www.unsplash.it/280/".$randomImageHeight."/?random&sig=".$rand_no."\"> ";

				    echo "</div>";

				    echo "<div class=\"bottom\">";

				    echo "<p>".$quote_text."</p>";

				    echo "</div></div>";

			}
			echo "</div>";

			//col3
			echo "<div class=\"card-col-3\">"; //start of first column
			for ($i=1; $i <=floor($total_rows/3) ; $i++) { 
				    $randomImageHeight = rand(240, 340);  //Image heright
				    $relation = 280/$randomImageHeight;
				    $padding = 100/$relation;
				    $rand_no =mt_rand()/ mt_getrandmax();


				    $row1 = mysqli_fetch_assoc($result1);
				    $quote_text=$row1["quote_text"];

				    echo "<div class=\"card\">";
				    echo "<div class=\"top\" style=\"padding-bottom:".$padding."%\">";

				    echo "<img src=\"https://www.unsplash.it/280/".$randomImageHeight."/?random&sig=".$rand_no."\"> ";

				    echo "</div>";

				    echo "<div class=\"bottom\">";

				    echo "<p>".$quote_text."</p>";

				    echo "</div></div>";

			}
			echo "</div>";

		}//end of cards printing

	}//Outer most if	

 	?>
 	 
<!-- 
	  <div class="card-col-1"></div>
	  <div class="card-col-2"></div>
	  <div class="card-col-3"></div> -->

	</div>



<?php include "../loginForm/loginHome.php" ;?>
<?php include "../includes/footer.php"; ?>


	 

 </body>

 </html>
