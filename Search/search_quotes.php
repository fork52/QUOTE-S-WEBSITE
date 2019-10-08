<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Quote's Website</title>
	  <link rel="stylesheet" href="../BS/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,700'>
	  <link rel="stylesheet" href="searchStyle.css">
	  <link rel="stylesheet" href="cardStyle.css">
	  <script src="../BS/js/jquery.min.js"></script>
	  <script src="../BS/js/bootstrap.min.js"></script>

	 <link href="style.css" rel="stylesheet" />
	 <link href="../loginForm/loginStyle.css" rel="stylesheet" />
</head>
<body>
<!-- partial:index.partial.html -->

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

		<?php include "../includes/header_links.php"; ?>
		<?php include "../includes/db_connect.php"; ?>
		<?php $searchword="";  ?>

	  </div>
 </nav>

<br> <br> <br> <br> <br> <br> <br>
<center>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="wrap">
   <div class="search">
      <input name="searchbar" type="text" class="searchTerm" placeholder="Enter a keyword"  value="<?php echo $searchword;?>" >
      <button name="submit_search" type="submit" class="searchButton">
	      <i class="fa fa-search"></i>
     </button>
   </div>
</div>
</form>
</center>

<br> <br>

<div class="container">

<?php
			$searchword="";
			echo "<div class=\"cardWrapper\">";
			echo "<center><h1>Quotes</h1></center><br>";

			if (isset($_POST["submit_search"]) and $_SERVER["REQUEST_METHOD"] == "POST" ) {
				$searchword = $_POST["searchbar"];
				$sql_query = "SELECT DISTINCT quote_text,quote_author FROM quotes WHERE LENGTH(quote_text<=40) AND quote_text LIKE'% ".$searchword." %' ORDER BY RAND() LIMIT 25" ;
			
				// echo "<center><h1>Word=".$searchword."</h1></center>";

			}
			 else {
				$searchword="";
				$flag=0;
				// echo "<center><h1>Word=".$searchword.".</h1></center>";
				$sql_query = "SELECT * FROM quotes WHERE LENGTH(quote_text<=27) ORDER BY RAND() LIMIT 5" ;
			
			}
			
			// if($searchword!="" and $flag==1){
			// 	// $sql_query = "SELECT * FROM quotes WHERE LENGTH(quote_text<=40) AND quote_text LIKE'%".$searchword."%' ORDER BY RAND() LIMIT 25" ;
			// }
			// else{
			// 	$sql_query = "SELECT * FROM quotes WHERE LENGTH(quote_text<=27) ORDER BY RAND() LIMIT 5" ;
			// 	echo "<center><br><h1>Please enter a keyword</h1></center><br><br><br>";
			// }

			echo "<div class=\"cardCols\">";
			
	
			$result = mysqli_query($conn,$sql_query);
			$resultCheck = mysqli_num_rows($result);
			$counter = 501;

			if($resultCheck>0){
				// shuffle_assoc($result);


				while ( $row = mysqli_fetch_assoc($result)) {

					   
					$quote =$row["quote_text"];
					$author_name=$row["quote_author"];
					$url_img_no = $counter;						//Counter var
					$counter ++;
					$url_img_no=(string) $url_img_no;
					$url_img = "https://unsplash.it/".$url_img_no."/".$url_img_no."/";

					echo "<div class=\"cardColumn\" ontouchstart=\"this.classList.toggle('hover'); \"> ";
					echo "<div class=\"cardContainer\"> ";
					echo "<div class=\"cardFront\" style=\"background-image: url(".$url_img." )\"> ";
					//Change the url nos

					echo " <div class=\"cardInner\"> ";
					echo " <p>Quote by</p>";

					echo "<span>".$author_name."</span>"; 
					//Change the name of the author	

					echo "</div> </div> ";				
					echo "<div class=\"cardBack\"> ";			
					echo "<div class=\"cardInner\">";	
					echo "<p>".$quote."</p> ";	
					//Change the quote

					echo "</div> </div> </div> </div>";	

					}//while
			}//if
			echo "</div> </div>";	

		?>
</div>

<br> <br><br> <br>
<br> <br>
<br> <br>
<br> <br>


<?php include "../includes/footer.php" ?>
<?php include "../loginForm/loginHome.php" ?>



</body>
</html>