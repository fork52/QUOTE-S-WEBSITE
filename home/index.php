<!DOCTYPE html>
<html>
<head>
  <title>Quote's Huddle</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../BS/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,700'>
  <link rel="stylesheet" href="cardStyle.css">

  <script src="../BS/js/jquery.min.js"></script>
  <script src="../BS/js/bootstrap.min.js"></script>
  
  <link href="style.css" rel="stylesheet"/>
  <link href="../loginForm/loginStyle.css" rel="stylesheet" />

</head>

<body>
<?php include "../includes/sessionStarting.php" ?>

<?php include "../includes/navbar.php" ?>


  <div id="home">
    <div class="landing-text">
        <h1>Quote's Huddle</h1>
        <h3>A place to share your great ideas and get inspired!</h3>
        <br> <br>
        <a href="../rgform/regform.php"  class="btn btn-default btn-lg">Share your thoughts</a>
    </div>  
  </div>

<br> <br>


<div class="padding1">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="../img/aspire.png" width="450" height="300"></div>

      <div class="col-sm-6 text-center">
        <h2>WHAT WE OFFER</h2>
        <p class="lead">Quote's Huddle is a place where you can view and browse for the quotes of your taste as and when required. We have a galore of different quotes to provide written by the best and renowned  authors.Further,we believe that inherent in the quotations lies the essence of the individuals we have quoted; their interests, belief system, comments and ideas are captured in time to benefit our generation and the next.Our quotations database is large and getting bigger every day.We have a treasure trove of historic, political, culturally relevant quotations available on our site</p>

        <p class="lead">Our goal is to create a website which will allow people to share their own quotes and build their own profiles in a secure way.We provide a number of browsing facilities as well which enhances the user experience. Our interface is user friendly and pleasing. We believe that a few words can make a huge difference in a person's life.</p>
      </div>

</div>
</div>
</div>

<br> <br>

<div class="padding2">
    <div class="container">
      <div class="row">
        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">

          <h4> Enrich your thoughts </h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>

        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="../img/i1.png" width="280" height="250">
        </div>

        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">
           <h4>Share your ideas</h4>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="../img/i2.png" width="280" height="250">
        </div>

      </div>
      </div>
</div>


<br> <br>



 <?php include_once "../includes/home_quoteCards.php" ?>

<br> <br>

<div id="fixed">
</div>

<br> <br> <br> <br>


<?php include "../loginForm/loginHome.php" ;?>
<?php include "../includes/footer.php"; ?>


</body>
</html>







