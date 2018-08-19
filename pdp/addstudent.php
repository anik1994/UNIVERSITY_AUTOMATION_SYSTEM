<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	if(isset($_POST['register_btn'])){
		$student_id = mysql_real_escape_string($_POST['student_id']);
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);
		$total_credit = mysql_real_escape_string($_POST['total_credit']);
		$sec = mysql_real_escape_string($_POST['sec']);
		$sub_sec = mysql_real_escape_string($_POST['sub_sec']);

		$year = mysql_real_escape_string($_POST['year']);
		$semester = mysql_real_escape_string($_POST['semester']);
		$dep_id = mysql_real_escape_string($_POST['dep_id']);
		$temp_roll = mysql_real_escape_string($_POST['temp_roll']);

		$completed_credit = mysql_real_escape_string($_POST['completed_credit']);
		$cgpa = mysql_real_escape_string($_POST['cgpa']);
		

		if($password == $password2){
			//create user
			//$password = md5($password); //hash password before storing for security purposes
			$qry="SELECT * FROM dep_tbl WHERE dep_id='$dep_id'";

		
			//$qry="SELECT * FROM team WHERE idTeam=$team";
			$result = mysqli_query($db,$qry);
			
			$num_rows = mysqli_num_rows($result);
			if($num_rows >= 0){
    		//mysqli_query("INSERT INTO user(name, team, username, password)VALUES('$name', $team, '$username', '$password')");
				$sql = "INSERT INTO student_tbl2(stu_id,dep_id) VALUES('$student_id',$dep_id')";
			mysqli_query($db,$sql);

			}else{
    		echo "Team is not valid!!!";
			}


		/*	$sql = "INSERT INTO student_tbl(year,semester,dep_id,temp_roll,stu_id,name,email,password,total_credit,completed_credit,cgpa,sec,sub_sec) VALUES('$year','$semester','$dep_id','$temp_roll','$student_id','$name',$email','$password','$total_credit','$completed_credit','$cgpa','$sec','$sub_sec')";
			mysqli_query($db,$sql); */
			

		/*	if(mysqli_query($db,$qry)){
  mysqli_query("INSERT INTO student_tbl(year,semester,dep_id,temp_roll,stu_id,name,email,password,total_credit,completed_credit,cgpa,sec,sub_sec) VALUES('$year','$semester','$dep_id','$temp_roll','$student_id','$name',$email','$password','$total_credit','$completed_credit','$cgpa','$sec','$sub_sec')"); 

  //header("location: add_user.php?remarks=success"); 
  //mysqli_close($db);
}
else {
mysqli_error($con); 
}*/
			print "New Student Added";
		}
		else{
			//$_SESSION['message'] = "The two passwors do not match";
		}
	}

?>

<style type="text/css">
	div{
	background-color:#008b8b;
	font-size: 22px;
	font-family: Tahoma;
	font-type: Helvetic;
	color: black;
	margin-top:60px;
	margin-bottom: 50px;
	margin-left:400px;
	margin-right:400px;
	border: 2px solid black;
	border-radius: 15px;
	
}
h1{
	background-color: #F0F8FF;
	border:2px solid black;
	border-radius: 15px;
	margin-top: 60px;
	margin-bottom: 80px;
	margin-right: 440px;
	margin-left: 440px;
	font-size: 25px
	font-type: Helvetic;
}

body {  background-color:#00688B }

</style>

<!DOCTYPE html>
<html>
<head>
	<title>ADD NEW Student</title>
</head>
<body>

<center><h1>ADD NEW Student</h1></center>

<div>
<center>
<form method="POST" action="addstudent.php">
	<table>
	<tr>
			<td>Student ID:</td>
			<td><input type="text" name="student_id" class="textinput"></td>
		</tr>
		<tr>
			<td>Student Name:</td>
			<td><input type="text" name="name" class="textinput"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textinput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textinput"></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="password2" class="textinput"></td>
		</tr>
		<tr>
			<td>Total Credit:</td>
			<td><input type="float" name="total_credit" class="textinput"></td>
		</tr>
		<tr>
			<td>Completed Credit:</td>
			<td><input type="float" name="completed_credit" class="textinput"></td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td><input type="float" name="cgpa" class="textinput"></td>
		</tr>
		<tr>
			<td>Sec:</td>
			<td><input type="text" name="sec" class="textinput"></td>
		</tr>
		<tr>
			<td>Sub Section:</td>
			<td><input type="text" name="sub_sec" class="textinput"></td>
		</tr>

		<tr>
			<td>Year:</td>
			<td><input type="number" name="year" class="textinput"></td>
		</tr>
		<tr>
			<td>Semester:</td>
			<td><input type="number" name="semester" class="textinput"></td>
		</tr>
		<tr>
			<td>Dep ID:</td>
			<td><input type="number" name="dep_id" class="textinput"></td>
		</tr>
		<tr>
			<td>Temp Roll:</td>
			<td><input type="number" name="temp_roll" class="textinput"></td>
		</tr>

		<tr>
			<td><input type="submit" name="back_btn" value="Back"></td>
			<td><input type="submit" name="register_btn" value="ADD"></td>
		</tr>
	</table>
</form>
</center>
</div>

</body>
</html>