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

<br><br><br>
<?php
session_start();
include 'connect.php';
$name=$_GET['name'];
$id=$_GET['id'];
$teachers_name=$_GET['teacher_name'];


$sql="SELECT * FROM teacher_test_info  where teachers_name='".$name."'";

$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {?>
      

<div style="overflow-y:scroll;background-color:white;height:300px">
<nav style="float: left;
    max-width:320px;
    margin:0px;
    padding: 1em;clip: rect(auto, 312px, auto, auto);">
  <ul style="list-style-type: none;
    padding: 0;max-height:180px;overflow-y:auto;width:300px">
      <br><?php

while($row = $result->fetch_assoc()) { ?>

    <li><input type="button" value="<?php echo $row['quiz_name']." Course:".$row['course_code']." Uploaded:".$row['upload']; ?>"  
onclick="location.href='http://localhost:234/proj/quiz_actions.php?quiz=<?php echo $row['quiz_name']; ?>&id=<?php echo $id; ?>&code=<?php echo $row['course_code']; ?>'"></li>
    <?php } ?>
  </ul>
</nav>
<?php 
}else {
    echo "No quizzes";
}
$conn->close();

//$_SESSION['quiz']=echo ;
?>

<article style="margin-left: 320px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;">
  <h1 style="text-align:center;">Hello</h1><br>

  <p style="margin-left:180px;"><b>You can review previous quizzes using left panel or create new quiz using create buttton below.</b></p>
</article>
<br><br>
</div>
<br><br><br><br>



<div class="container fluid" >
  <input type="button" value="create" style="width:1000px;margin-left:30px; height:40px;background-color:#f4511e;text-color:Black;"
  onclick="location.href='http://localhost:234/proj/create_quiz.php?id=<?php echo $id; ?>&teacher_name=<?php echo $teachers_name; ?>';"><br><br>
</div>
<br><br><br>




<footer style="padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;">IIT Mandi</footer>

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




<body>
  </html>









































