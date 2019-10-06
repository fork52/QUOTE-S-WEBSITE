<!DOCTYPE html>
<html>
<head>
  <title>Quote's Website</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="style.css" rel="stylesheet" />
  <link href="../loginForm/loginStyle.css" rel="stylesheet" />


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


<?php include "../includes/header_links.php" ?>

  </div>
  </nav>

<br> <br> <br>


<div class="jumbotron text-center bcolor" style="background-image: url(4.jpg);background-repeat: repeat;background-size: contain">
  <h1>ABOUT US</h1>
  <p>Aspire To Aspire!</p> 
  <p></p> 
</div>


  <div id="msg1" class="alert alert-info">
    <center>
      <strong> Your inspring words can change lives! </strong>
    </center>
  </div>

  <br> <br>


  <div class="container">
    <div class="row">

       <div class="col-sm-3 info" style="background-image: url(quotes2.jpg);background-repeat: repeat;background-size: contain">
        <h3>A Galore Of Quotes</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
       </div>

       <div class="col-sm-1"></div>


      <div class="col-sm-3 info"style="background-image: url(quotes2.jpg);background-repeat: repeat;background-size: contain">
        <h3>User friendly interface</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>

       <div class="col-sm-1"></div>

      <div class="col-sm-4 info"style="background-image: url(quotes2.jpg);background-repeat: repeat;background-size: contain">
        <h3>Share your thoughts</h3>        
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>

    </div>
  </div>
  <br><br>




<br> <br> <br>




<?php include "../includes/footer.php" ?>


<?php include "../loginForm/loginForm.php" ?>

</body>
</html>







