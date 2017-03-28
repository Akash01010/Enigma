<!-- compare with original answer and :
	save in students account
	save in quiz result account/table
logout(session_destroy); -->
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
<?php
include 'connect.php';
$quiz=$_GET['quiz'];
$roll_no=$_GET['roll_no'];
$ans=$_POST['ans'];
//$string = implode(';', $ans);
//$count=$_GET['count'];
$string="Akash";
$marks=0;
$i=0;
echo sizeof($ans);
$sql="SELECT correct_ans from `".$quiz."`";
$result=mysqli_query($conn,$sql);
if(sizeof(ans)<sizeof($result)){
	echo "Please attempt all the questions";
}
else{
for($i=0;$i<sizeof($ans);$i++){
	$row=$result->fetch_assoc();
	if($ans[$i]==$row['correct_ans']){
		$marks++;
		echo "Hello";
	}
}
$sql = "INSERT INTO `result".$quiz."` (roll_no,answer,marks)  values ('".$roll_no."','".$string."','".$marks."')";
$result=mysqli_query($conn,$sql);
$sql = "INSERT INTO `".$roll_no."` (quiz_name,answer,marks) values ('".$quiz."','".$string."','".$marks."')";
$result=mysqli_query($conn,$sql);
//echo "Thanks";
header("Location: http://localhost:234/proj/index.php");
}

?>

</body>
</html>