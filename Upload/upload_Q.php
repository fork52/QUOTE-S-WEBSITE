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
<?php include "../includes/sessionStarting.php" ?>
<?php include "../includes/navbar.php" ?>

<br><br><br><br><br><br><br>

<div class="container">
  <form method="POST">
    <div>
        <center><label for="Textarea1">Upload Your Quote</label></center><br><br>
        <textarea class="form-control" name="quote_area" id="Textarea1" rows="7" placeholder="Enter Quote text"></textarea>
        <br><br><br><br>
        <center><button type="submit" name="submitQuote" class="myButton">Submit</button>

</center>

    </div>
  </form>

</div>
<br><br><br><br><br><br>




<?php include "../loginForm/loginHome.php" ;?>
<?php include "../includes/footer.php"; ?>

</body>

</html>

