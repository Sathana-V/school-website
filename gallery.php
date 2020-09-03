<html><head>
    <title>
        gallery
</title>
<link rel="stylesheet" type="text/css" href="homecss.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >
<div class=".container-fluid">
<div class="heading1">
        <center>
            <h1>SVMH SCHOOL</h1>
        </center>
    </div>
    <nav id="navbar">

        <ul>
            <li><img src="logo.jpg" height="30"class="img-circle" width="60" </li>
          
            <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="admis.php">ADMISSION</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                

        </ul>
    </nav>
    <h2 class="about"style="text-align:center;font-family:sofia;">OUR GALLERY</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="f1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="f2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="f3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="f4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="f5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="f6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="f1.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="f2.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="f3.jpg" style="width:100%" height="130px" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="f4.jpg" style="width:100%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="f5.jpg" style="width:100%" height="130px"onclick="currentSlide(5)" >
    </div>    
    <div class="column">
      <img class="demo cursor" src="f6.jpg" style="width:100%" onclick="currentSlide(6)" >
    </div>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<div class="footer">
        <div class="copyrightfoot">
            © Copyright 2016 All Rights Reserved
             <br>For More Details &nbsp
             CONTACT:987678987
    </div>
    </body>
 </html>