 <?php session_start();
   ?>

<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" href="style.css">-->
  <link rel="stylesheet" href="style1.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Online Quiz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#joinus">Login</a></li>
        <!--<li><a href="#login">Login</a></li>
        <li><a href="#signup">SignUp</a></li>
        <li><a href="#joinus">Sign Up</a></li>
<!--    <li><a href="#contact">Contact Us</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Online Quiz</h1>
  <p>Quick and Easy</p>
</div>


<!-- Container (Pricing Section) -->
<div id="joinus" class="container-fluid">
  <div class="text-center">
    <h2>Hello</h2>
    <!--<h4>Choose from following</h4>-->
  </div>
  

  <div class="row slideanim">
    <div class="col-sm-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Student</h1>
        </div>
        <div class="panel-body">
          <p><strong>Give Tests</strong></p>
          <p><strong>Instant Results</strong></p>
          <!--<p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>-->
        </div>
        <div class="panel-footer">
          <h3>IIT Mandi</h3>
          <h4>Moodle Account</h4>
          <button class="btn btn-lg" onclick="location.href='http://localhost:234/proj/student_login.php';">Login</button>
        </div>
      </div>
    </div>
    <div class="col-sm-6 ">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Teacher</h1>
        </div>
        <div class="panel-body">
          <p><strong>Prepare Quizzes</strong></p>
          <p><strong>See Results</strong></p>
<!--      <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>-->
        <div class="panel-footer">
          <h3>IIT Mandi</h3>
          <h4>Moodle Password</h4>
          <button class="btn btn-lg" onclick="location.href='http://localhost:234/proj/teach_login.php';">Login</button>
        </div>
      </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>