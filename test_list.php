 <?php session_start();
   ?>
<html>
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
<br><br>


<?php

include 'connect.php';
$sql="SELECT * FROM teacher_test_info  where upload=1";

$result=mysqli_query($conn,$sql);

if ($result->num_rows >= 0) {?><form action="http://localhost:234/proj/show_quiz_students.php?roll_no=<?php echo $_GET['roll_no']; ?>" method="POST">
<header>Choose your Corresponding Quiz</header><table><tr><td><br></td></tr><?php
    // output data of each row   onclick="location.href='http://localhost:234/proj/show_quiz_students.php';"
    
while($row = $result->fetch_assoc()) { ?><tr><td><input type="radio" value="<?php echo $row['id'].$row['quiz_name'].$row['course_code'];?>" name="quiz" style="width:50px" ></td><td>
<?php echo $row['course_code']."  ".$row['quiz_name']."  by   ".$row['teachers_name']."<br>";?></td></tr><?php
    }
}
else {
    echo "0 results";
}
$conn->close();
?><tr><td><br></td></tr></table>
<input type="submit">
</body>

</html>
