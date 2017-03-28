<?php
session_start();
$teacher_name=$_GET['teacher_name'];
include 'connect.php';
//$empname=$_POST['user'];
//$password=$_POST['password'];
//$id=$_POST['id'];
$id=$_GET['id'];
$quiz_name=$_POST['quiz_name'];
$course_code=$_POST['course_code'];
$duration=$_POST['duration'];
$sql ="CREATE TABLE `".$id.$quiz_name.$course_code."`(
	id int primary key not null auto_increment,
    question varchar(1024),
    optionA varchar(50),
    optionB varchar(50),
    optionC varchar(50),
    optionD varchar(50),
    correct_ans varchar(50)
)";

$result=mysqli_query($conn,$sql);

if(!$result){?><script>
    window.alert("Error Encountered.Same named quiz is created before for same course from your account");</script>

    <?php
    //header("Location: http://localhost:234/proj/create_quiz.html");
}
else{
$sql ="CREATE TABLE `result".$id.$quiz_name.$course_code."`(
	id int primary key not null auto_increment,
	roll_no varchar(20),
    answer varchar(25),
    marks int
)";

$result=mysqli_query($conn,$sql);

if(!$result){?><script>
    window.alert("Error Encountered");</script>

    <?php
}
else{
	$sql="INSERT INTO teacher_test_info (teachers_name,quiz_name,upload,course_code,batch_year) values ('".$teacher_name."','".$quiz_name."','0','".$course_code."','NULL')";
	$result = mysqli_query($conn,$sql);
	if($result){
	header("Location: http://localhost:234/proj/quiz_questions.php");}
	else
		echo "Error";
}

}//header("Location: http://localhost:234/proj/quiz_questions.php");
$conn->close();

?>
