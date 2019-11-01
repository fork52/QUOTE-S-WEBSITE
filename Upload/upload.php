<?php include "../includes/sessionStarting.php" ?>

<?php 
if(isset($_SESSION['upload_msg'])){
    echo "<script>alert('" . $_SESSION['upload_msg']."'); </script>";
    //to not make the error message appear again after refresh:
    unset($_SESSION['upload_msg']);
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Quote's Huddle</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../BS/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,700'>

  <script src="../BS/js/jquery.min.js"></script>
  <script src="../BS/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet"/>
  <link href="../loginForm/loginStyle.css" rel="stylesheet" />

</head>

<body>
<?php include "../includes/navbar.php" ?>

<br><br><br><br><br><br><br>

<div class="container">
  <form method="POST">
    <div>
        <center><label for="Textarea1">Upload Your Quote</label></center><br><br>
        <textarea class="form-control" maxlength='50' name="quote_area" id="Textarea1" rows="7" placeholder="Enter Quote text"></textarea>
        <br><br>
        <center><button type="submit" name="submitQuote" class="myButton">Submit</button>
</center>

    </div>
  </form>

</div>

<?php
  require "../phpspellcheck/include.php";
  $mySpell = new SpellAsYouType();
  $mySpell->InstallationPath = "../phpspellcheck/";
  $mySpell->Fields = "ALL";
  //echo $mySpell->Activate();


?>




<div class="container">
  <div class="errorText">
  <?php 
    $quoteText="";
    $errorStatus=False;
    if (isset($_POST['submitQuote']) and $_SERVER["REQUEST_METHOD"] == "POST"){
      $quoteText = mysqli_real_escape_string($conn,$_POST["quote_area"]);  //Post is a superglobal
      echo"<br><h1>Your quote :\"".$quoteText."\"<h1>" ;
    }


       $r1='/[!@#$%^*()\_=+{}<>]/';  //specialchars

        if(preg_match_all($r1,$quoteText)>0){
             echo"<br><h1>Specialcharacters not allowed.</h1>";
             $errorStatus=True;
        }
        elseif (str_word_count($quoteText)<2) {
            echo"<br><h1>Minimum two words required.</h1>" ;
            $errorStatus=True;
        }

        else{
        $sql_query = "SELECT DISTINCT quote_text FROM `quotes`;";
        $result = mysqli_query($conn,$sql_query) ;
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck>0){

          while ( $row = mysqli_fetch_assoc($result)) {

            $quote_fetched =$row["quote_text"];

            if( strtolower($quoteText) == strtolower($quote_fetched) ){
              echo "<h1>Quote already exists in the database! We do not support plagiarism.</h1>";
              $errorStatus=True;
              break;
            }
            }//while

        }//if      
      }//elseif


      if($errorStatus==False){
      //No errors
      $author_name=$_SESSION['user_first']." ".$_SESSION['user_last'];
      //Insert the quote inside in the database using the query as we are good to go
      $insert_query = "INSERT INTO quotes(`quote_text`, `quote_author`) VALUES ('$quoteText','$author_name');";
      mysqli_query($conn,$insert_query);

      //Redirecting the page to home page for now
        $_SESSION['upload_msg']="Quote Uploaded!";
        header("Location:../Upload/upload.php");

    }//end of success if
      
  ?>
  </div>

</div>


<br><br><br><br>




<?php include "../loginForm/loginHome.php" ;?>
<?php include "../includes/footer.php"; ?>

</body>

</html>

