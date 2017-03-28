<!-- add quiz to quiz table -->
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
<br><br><br><br>



<?php
include"connect.php";

$question=$_POST['question'];
$OptionA=$_POST['optionA'];
$OptionB=$_POST['optionB'];
$OptionC=$_POST['optionC'];
$OptionD=$_POST['optionD'];
$corr_ans=$_POST['corr_ans'];

/*foreach ($question as $eachInput) {
     print_r $eachInput . "<br>";
}*/
$i=0;
//echo $question[1];
for( $i = 0 ; $i < sizeof($question); $i++){
$sql="INSERT INTO quiz_ques (question,optionA,optionB,optionC,optionD,correct_ans) values ('".$question[$i]."','".$OptionA[$i]."','".$OptionB[$i]."','".$OptionC[$i]."','".$OptionD[$i]."','".$corr_ans[$i]."') ";
	$result = mysqli_query($conn,$sql);
}
echo "Quiz added Successfully";
//header()
/*$OptionB[]=$_POST['optionB[]'];
$optionC[]=$_POST['optionC[]'];
$OptionD[]=$_POST['optionD[]'];
$corr_ans[]=$_POST['corr_ans[]'];
//$empname="CS Yadav";
//$sql="SELECT * FROM teacher_test_info WHERE teachers_name = '$empname'";
$i=0;
while(root[i]!=NULL){
	$sql="INSERT INTO question_table values (question,optionA,optoinB,optoinC,optoinD,corr_ans) (question[i],optionA[i],optoinB[i],optoinC[i],optoinD[i],corr_ans[i]) ";
	$result = mysqli_query($conn,$sql);
	i++;
}
*//*if ($result->num_rows >0){
// output data of each row
//echo "Welcome ".$empname."<br>";
    while($row = $result->fetch_assoc()) {
    	?>
		<input type="button" value='<?php echo $row['quiz_name']; ?>' onclick="location.href='stud_login.html'">
		<input type="button" value='remove' onclick="location.href='#'"><br>
		<?php  }
}
else {
    echo "0 results";
} ?>
*/

?>