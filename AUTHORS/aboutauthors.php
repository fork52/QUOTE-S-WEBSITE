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


      <div class="collapse navbar-collapse" id="navbar-collapse-main">
        <ul class="nav navbar-nav navbar-right">

          <li><a class="active" href="../index.php">HOME </a></li>
          <li><a href="#">PROFILE </a></li>
          <li><a  href="aboutauthors/aboutauthors.php">AUTHORS </a></li>
          <li><a  href="rgform/index.html">REGISTER </a></li>
          <li><a  href="#">ABOUT </a></li>


        </ul>

      </div>
  </div>
  </nav>

<div class="jumbotron text-center bcolor">
  <h1>ABOUT THE AUTHORS</h1>
  <p>Aspire To Aspire!</p> 
  <p></p> 
</div>

<div class="container">
    <div class="row">

       <div class="col-sm-3info" > 
         
         <img src="Mahatma.jpg" class="img-rounded" height="15%" width="20%">

         <font color="Red" size="12">Mahatma Gandhi</font><br>


         Mohandas Karamchand Gandhi (2 October 1869 – 30 January 1948) was an Indian lawyer,anti-colonial nationalist,and political ethicist,[5] who employed nonviolent resistance to lead the successful campaign for India's independence from British Rule,and in turn inspire movements for civil rights and freedom across the world.Born and raised in a Hindu family in coastal Gujarat, western India, and trained in law at the Inner Temple, London, Gandhi first employed nonviolent civil disobedience as an expatriate lawyer in South Africa, in the resident Indian community's struggle for civil rights.
         
      </div>
    </div>




   <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->

  <div class="row">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="M1.jpg" style="width:100%">
    </div>
  </div>


  <div class="row">
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="M2.jpg" style="width:100%">
  </div>
</div>


  <div class="row">
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="M3.jpg" style="width:100%">
  </div>
</div>


  <div class="row">
 <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="M4.jpg" style="width:100%">
  </div>
</div>


</div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>


</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

    </div>
  </div>




<br> <br> <br>

<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3>Contact us</h3> 
      <br>
      <h4>Email us at: random@gmail.com </h4>
      <h4>Address: afdsgdsg </h4>
    </div>

     <div class="col-sm-4">
      <h3>Connect With</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>

    <div class="col-sm-4">
      <img src = "../img/logo.png" class="icon" width="90" height="50">
    </div>

  </div>
</footer>

</body>
</html>