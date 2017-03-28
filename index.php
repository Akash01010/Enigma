 <?php session_start();
   ?>

<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Welcome</title>
  <meta charset="utf-8">
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <link href="form.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">

  <style>
  body{
    background-color:#F1F1F1;
  }
</style>
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
      <a class="navbar-brand" href="#myPage"><img src="images\iitmandi_logo.jpg" style=" width: 60px"> IIT Mandi</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#root">Root Login</a></li>
        <!--<li><a href="#login">Login</a></li>
        <li><a href="#signup">SignUp</a></li>
        <li><a href="#joinus">Join Us</a></li>
        <li><a href="#contact">Contact Us</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" style="height: 100%;">
  <h1>Welcome</h1>
  <p>Online Quiz</p>
</div>


<!--<form id ="root"class="xx" action="http://localhost:234/proj/root_login.php" method="POST">
  <section class="login">
    <div class="form">
      <h3 style="
    margin-left: 165px;
    font-weight: bolder;
    font-size: 20px;
    display: initial;
">Name: </h3>
      <input class="name_text" type="text" placeholder="Name" name="root">
      <h3>Password : </h3>
      <input class="pass_txt" type="password" placeholder="Password" name="password">
      <h3>Paper Code : </h3>
      <input class="name_text" type="text" placeholder="Paper Code" name="Paper Code">
      <button type="submit" class="button" title="Login" style="margin-left: 152px;margin-top: 5px;border: 1px solid blueviolet;background-color: #584f4f;width: 69px;margin-bottom: 3px;height: 22px;text-shadow: azure;">Login</button>
    </div>
  </section>
  </form>-->


  <form id="root" action="http://localhost:234/proj/root_login.php" method="POST">
  <header>Login</header>
  <label>Username <span>*</span></label>
  <input type="text" name="root"  >
  <!-- <div class="help">At least 6 character</div> -->
  <label>Password <span>*</span></label>
  <input type="password" name="password">
  <!-- <div class="help">Use upper and lowercase lettes as well</div> -->
  <button type="submit">Login</button>
</form>
<br><br><br><br><br>
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
