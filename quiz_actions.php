<?php
session_start();
//$quiz=$_SESSION['quiz'];
$quiz=$_GET['quiz'];
$id=$_GET['id'];
$code=$_GET['code'];
//echo $quiz;
?>

<!DOCTYPE html>
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
<br><br><br><div style="margin-left:510px;margin-top:200px">
<!--<input type="submit" value="Update" name="quiz" onclick="location.href="http://localhost:234/proj/show_quiz.php""><br>-->
<input type="button" class="form button;" style="backgroung-color:#f6f6f6;width:250px" value="Remove from Web" name="quiz" onclick="location.href='http://localhost:234/proj/remove_from_web.php?quiz=<?php echo $quiz; ?>&id=<?php echo $id; ?>&code=<?php echo $code; ?>'"><br>
<input type="button" class="form button;" style="backgroung-color:#f6f6f6;width:250px" value="Upload" name="quiz" onclick="location.href='http://localhost:234/proj/upload.php?quiz=<?php echo $quiz; ?>&id=<?php echo $id; ?>&code=<?php echo $code; ?>'"><br>

<input type="submit" class="form button;" style="backgroung-color:#f6f6f6;width:250px" value="Delete" name="quiz" onclick="location.href='http://localhost:234/proj/delete.php?quiz=<?php echo $quiz; ?>&id=<?php echo $id; ?>&code=<?php echo $code; ?>'"><br>
<input type="submit" class="form button;" style="backgroung-color:#f6f6f6;width:250px" value="Result" name="quiz" onclick="location.href='http://localhost:234/proj/result.php?quiz=<?php echo $quiz; ?>&id=<?php echo $id; ?>&code=<?php echo $code; ?>'"><br>
</div>
</body>
</html>
