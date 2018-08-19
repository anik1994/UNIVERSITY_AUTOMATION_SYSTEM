<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	if(isset($_POST['back_btn'])){
		header("location: show_delete_student_admin.php");
	}

	$nameErr = $idErr = $emailErr = $passErr = $pass2Err = $depidErr = "";
$student_id = $name = $email = $password = $password2 = $total_credit = $sec = $sub_sec = $year = $semester = $dep_id = $temp_roll = $completed_credit = $cgpa = "";

	if(isset($_POST['register_btn'])){
		/*$student_id = mysql_real_escape_string($_POST['student_id']);
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
		$cgpa = mysql_real_escape_string($_POST['cgpa']);*/

		//////////////////////////////////////

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
	if (empty($_POST["student_id"])) {
    $idErr = "ID is required";
  } else {
    $student_id = test_input($_POST["student_id"]);
  }

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["password2"])) {
    $pass2Err = "Password is required";
  } else {
    $password2 = test_input($_POST["password2"]);
  }

    if (empty($_POST["dep_id"])) {
    $depidErr = "Dep_id is required";
  } else {
    $dep_id = test_input($_POST["dep_id"]);
  }

  if (empty($_POST["total_credit"])) {
    $total_credit = "";
  } else {
    $total_credit = test_input($_POST["total_credit"]);
  }

   if (empty($_POST["completed_credit"])) {
    $completed_credit = "";
  } else {
    $completed_credit = test_input($_POST["completed_credit"]);
  }
   if (empty($_POST["sec"])) {
    $sec = "";
  } else {
    $sec = test_input($_POST["sec"]);
  }

  if (empty($_POST["sub_sec"])) {
    $sub_sec = "";
  } else {
    $sub_sec = test_input($_POST["sub_sec"]);
  }


  if (empty($_POST["year"])) {
    $year = "";
  } else {
    $year = test_input($_POST["year"]);
  }


  if (empty($_POST["semester"])) {
    $semester = "";
  } else {
    $semester = test_input($_POST["semester"]);
  }


  if (empty($_POST["temp_roll"])) {
    $temp_roll = "";
  } else {
    $temp_roll = test_input($_POST["temp_roll"]);
  }


  if (empty($_POST["cgpa"])) {
    $cgpa = "";
  } else {
    $cgpa = test_input($_POST["cgpa"]);
  }


}


		//////////////////////////////////////

		if($password == $password2){

			$qry="SELECT * FROM dep_tbl WHERE dep_id='$dep_id'";

			$result = mysqli_query($db,$qry);
			
			$num_rows = mysqli_num_rows($result);
			if($num_rows > 0){

			$sql = "INSERT INTO student_tbl(year,semester,dep_id,temp_roll,stu_id,name,email,password,total_credit,comleted_credit,cgpa,sec,sub_sec) VALUES('$year','$semester','$dep_id','$temp_roll','$student_id','$name','$email','$password','$total_credit','$completed_credit','$cgpa','$sec','$sub_sec')";
			mysqli_query($db,$sql);



		}
			
		}
	}


?>

<?php
/*
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$nameErr = $idErr = $emailErr = $passErr = $pass2Err = $depidErr = "";
$student_id = $name = $email = $password = $password2 = $total_credit = $sec = $sub_sec = $year = $semester = $dep_id = $temp_roll = $completed_credit = $cgpa = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
	if (empty($_POST["student_id"])) {
    $idErr = "ID is required";
  } else {
    $student_id = test_input($_POST["student_id"]);
  }

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["password2"])) {
    $pass2Err = "Password is required";
  } else {
    $password2 = test_input($_POST["password2"]);
  }

    if (empty($_POST["dep_id"])) {
    $depidErr = "Dep_id is required";
  } else {
    $dep_id = test_input($_POST["dep_id"]);
  }

  if (empty($_POST["total_credit"])) {
    $total_credit = "";
  } else {
    $total_credit = test_input($_POST["total_credit"]);
  }

   if (empty($_POST["completed_credit"])) {
    $completed_credit = "";
  } else {
    $completed_credit = test_input($_POST["completed_credit"]);
  }
   if (empty($_POST["sec"])) {
    $sec = "";
  } else {
    $sec = test_input($_POST["sec"]);
  }

  if (empty($_POST["sub_sec"])) {
    $sub_sec = "";
  } else {
    $sub_sec = test_input($_POST["sub_sec"]);
  }


  if (empty($_POST["year"])) {
    $year = "";
  } else {
    $year = test_input($_POST["year"]);
  }


  if (empty($_POST["semester"])) {
    $semester = "";
  } else {
    $semester = test_input($_POST["semester"]);
  }


  if (empty($_POST["temp_roll"])) {
    $temp_roll = "";
  } else {
    $temp_roll = test_input($_POST["temp_roll"]);
  }


  if (empty($_POST["cgpa"])) {
    $cgpa = "";
  } else {
    $cgpa = test_input($_POST["cgpa"]);
  }


}

*/

?>

<style type="text/css">
	div{
	background-color:#08718c;
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
input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

body {  background-image: url("4.jpg"); }

</style>

<!DOCTYPE html>
<html>
<head>
	<title>ADD NEW Student</title>
</head>
<body>

<center><h1>Add New Student</h1></center>

<div>
<center>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
		<tr>
			<td>Student ID:</td>
			<td><input type="text" name="student_id" class="textinput"><span class="error" style="color: red" >* <?php echo $idErr;?></span></td>
		</tr>
		<tr>
			<td>Student Name:</td>
			<td><input type="text" name="name" class="textinput"><span class="error" style="color: red" >* <?php echo $nameErr;?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textinput"><span class="error" style="color: red" >* <?php echo $emailErr;?></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textinput"><span class="error" style="color: red" >* <?php echo $passErr;?></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="password2" class="textinput"><span class="error" style="color: red" >* <?php echo $pass2Err;?></td>
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
			<td><input type="integer" name="year" class="textinput"></td>
		</tr>
		<tr>
			<td>Semester:</td>
			<td><input type="integer" name="semester" class="textinput"></td>
		</tr>
		<tr>
			<td>Dep ID:</td>
			<td><input type="integer" name="dep_id" class="textinput"><span class="error" style="color: red" >* <?php echo $depidErr;?></td>
		</tr>
		<tr>
			<td>Temp Roll:</td>
			<td><input type="integer" name="temp_roll" class="textinput"></td>
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