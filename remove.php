<DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Remove</title>
	</head>
	<body>
		<?php
		include 'connect.php';
//	$empname=$_POST['user'];
//$password=$_POST['password'];
//$id=$_POST['id'];
$empname="CS Yadav";
			$sql="SELECT * FROM teacher_test_info WHERE teachers_name = '$empname'";
			$result = mysqli_query($conn,$sql);

			if ($result->num_rows >0){
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
	</html>
