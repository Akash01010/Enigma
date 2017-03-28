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
</nav><br><br><br>
<?php
session_start();
include 'connect.php';
	$quiz=$_GET['quiz'];
	$id=$_GET['id'];
	$code=$_GET['code'];

$sqlr = "SELECT * from `result".$id.$quiz.$code."`";

$result=mysqli_query($conn,$sqlr);

if($result->num_rows>=0){?> <table style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;border-spacing: 5px;margin-left:430px;"><tr>
    <th style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;">S.No.</th>
    <th style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;">Roll No</th>
    <th style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;">Students Name</th> 
    <th style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;">Answer Submitted</th>
    <th style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;">Marks</th>
  </tr> <?php
    while($row = $result->fetch_assoc()) {?><tr>
    	<td style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;"><?php echo $row['id']; ?> </td><td style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;"><?php echo $row['roll_no']; ?></td><td style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;"><?php echo $row['students_name']; ?></td><td style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;"><?php echo $row['answer']; ?></td><td style="border: 1px solid black;
    border-collapse: collapse;padding: 15px;"><?php echo $row['marks']; ?></td>
    <?php } ?>
    </table><?php
}
else{
	echo "Error";
}
$conn->close();
?>
</body>
</html>