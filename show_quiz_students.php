 <?php session_start();
   ?>
<html >
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="div.css" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">

<title>Login Page</title>

<style>
	body{
		background-color:#F1F1F1;
	}
</style>
<script >
$(function () {
        $('input.less').on('click', function () {
          var i;
          //for (i = 0; i <document.getElementsByClassName('input_fields').length ; i++) {
          //document.getElementById('input_fields').
          document.getElementsByTagName('form')[0].submit();
          //}
        });
});
</script>
</head>


<body>
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
        <li><a href="#root">Student Login</a></li>
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
	$quiz=$_POST['quiz'];
	//$quiz_name=$_GET['quiz_name'];
	$i=1;
	$sql="SELECT * FROM `".$quiz."`";
	//$sql="SELECT * FROM quiz_ques";
	$result=mysqli_query($conn,$sql);
	$count=sizeof($result);
	if ($result->num_rows > 0) {?>
<form id="quick_post" method="post"  class="myForms" action="http://localhost:234/proj/stud_logout.php?quiz=<?php echo $quiz; ?>&roll_no=<?php echo $_GET['roll_no']; ?>"><?php
		while($row = $result->fetch_assoc()) {?>
			<div id="input_fields" class="division" style="width:900px;position:relative;top:auto;left:-230px;right:0px;">
			<header style="text-align:center;"><font size="6">Question <?php echo $i; $i++; ?> </font></header><table><tr>
			<div style="background-color:#F1F1F1;padding-left:20px;"><b><?php echo $row['question'];?></b><br><br><br><br></div></tr>
			<tr><td><br></td></tr>
			<tr><td><input type="radio" value="A"name="ans[]" style="width:30px"></td><td><div style="margin-left:40px;"><?php echo $row['optionA']; ?><br></div></td>
			<tr><td><input type="radio" value="B"name="ans[]" style="width:30px"></td><td><div style="margin-left:40px;"><?php echo $row['optionB']; ?><br></div></td>
			<tr><td><input type="radio" value="C"name="ans[]" style="width:30px"></td><td><div style="margin-left:40px;"><?php echo $row['optionC']; ?><br></div></td>
			<tr><td><input type="radio" value="D"name="ans[]" style="width:30px"></td><td><div style="margin-left:40px;"><?php echo $row['optionD']; ?><br></div></td>
			<!-- <tr><td><input name="ans[]" type="radio" value="E" checked="true"  style="width:30px"/></td> -->
			<tr><td><br></td></tr></table>
		</div>
			</form><br>
		<?php
		}?>

		<input class="less" type="submit" id="clickMe" onclick="function()"  value="Done" style="margin-left:1000px;width:180px;display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#f4511e;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;" >
		<?php
	}
	else {
		echo "0 results";
	}
	$conn->close();
	?>
	<footer><br><br><br><br><br><br></footer>

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