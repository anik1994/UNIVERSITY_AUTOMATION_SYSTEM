<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	//$_SESSION['stu_ida']="asif";

	if(isset($_GET['recordId2'])){

		$stu_id=mysql_real_escape_string($_GET['recordId2']);
		$_SESSION['stu_idaa']=$stu_id;
		//print "$stu_id";
		$sql = "SELECT * FROM student_tbl where stu_id='$stu_id'";
		$result = mysqli_query($db,$sql);

		while($row = mysqli_fetch_array($result)) 
		{ 
			$_SESSION['stu_ida']=$row['stu_id'];
			$_SESSION['namea']=$row['name'];
			$_SESSION['emaila']=$row['email'];
			$_SESSION['total_credita']=$row['total_credit'];
			$_SESSION['completed_credita']=$row['comleted_credit'];
			$_SESSION['cgpaa']=$row['cgpa'];
			$_SESSION['seca']=$row['sec'];
			$_SESSION['sub_seca']=$row['sub_sec'];
			$_SESSION['yeara']=$row['year'];
			$_SESSION['semestera']=$row['semester'];
			$_SESSION['dep_ida']=$row['dep_id'];
			$_SESSION['temp_rolla']=$row['temp_roll'];


		}	 

	}

	if(isset($_POST['back_btn'])){
		header("location: show_delete_student_admin.php");
	}

	if(isset($_POST['register_btn'])){
		$student_id = mysql_real_escape_string($_POST['student_id']);
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		//$password = mysql_real_escape_string($_POST['password']);
		//$password2 = mysql_real_escape_string($_POST['password2']);
		$total_credit = mysql_real_escape_string($_POST['total_credit']);
		$sec = mysql_real_escape_string($_POST['sec']);
		$sub_sec = mysql_real_escape_string($_POST['sub_sec']);

		$year = mysql_real_escape_string($_POST['year']);
		$semester = mysql_real_escape_string($_POST['semester']);
		$dep_id = mysql_real_escape_string($_POST['dep_id']);
		$temp_roll = mysql_real_escape_string($_POST['temp_roll']);

		$completed_credit = mysql_real_escape_string($_POST['completed_credit']);
		$cgpa = mysql_real_escape_string($_POST['cgpa']);


		$student=$_SESSION['stu_idaa'];

			$qry="SELECT * FROM dep_tbl WHERE dep_id='$dep_id'";

			$result = mysqli_query($db,$qry);
			
			$num_rows = mysqli_num_rows($result);
			if($num_rows > 0){

			$sql = "UPDATE student_tbl set year='$year',semester='$semester',dep_id='$dep_id',temp_roll='$temp_roll',name='$name',email='$email',total_credit='$total_credit',comleted_credit='$completed_credit',cgpa='$cgpa',sec='$sec',sub_sec='$sub_sec' where stu_id='$student'";
			mysqli_query($db,$sql);

			header("location: show_delete_student_admin.php");

		}
	}

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
	<title>ADD NEW USER</title>
</head>
<body>

<center><h1>Update Student</h1></center>

<div>
<center>
<form method="POST" action="edit_student_admin.php">
	<table>
		<tr>
			<td>Student ID:</td>
			<td><input type="text" name="student_id" class="textinput" value=<?php echo $_SESSION['stu_ida'];?>></td>
		</tr>
		<tr>
			<td>Student Name:</td>
			<td><input type="text" name="name" class="textinput"  value=<?php echo $_SESSION['namea'];?>></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textinput"  value=<?php echo $_SESSION['emaila'];?>></td>
		</tr>
		
		<tr>
			<td>Total Credit:</td>
			<td><input type="float" name="total_credit" class="textinput"  value=<?php echo $_SESSION['total_credita'];?>></td>
		</tr>
		<tr>
			<td>Completed Credit:</td>
			<td><input type="float" name="completed_credit" class="textinput"  value=<?php echo $_SESSION['completed_credita'];?>></td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td><input type="float" name="cgpa" class="textinput"  value=<?php echo $_SESSION['cgpaa'];?>></td>
		</tr>
		<tr>
			<td>Sec:</td>
			<td><input type="text" name="sec" class="textinput"  value=<?php echo $_SESSION['seca'];?>></td>
		</tr>
		<tr>
			<td>Sub Section:</td>
			<td><input type="text" name="sub_sec" class="textinput"  value=<?php echo $_SESSION['sub_seca'];?>></td>
		</tr>

			<tr>
			<td>Year:</td>
			<td><input type="integer" name="year" class="textinput" value=<?php echo $_SESSION['yeara'];?>></td>
		</tr>
		<tr>
			<td>Semester:</td>
			<td><input type="integer" name="semester" class="textinput" value=<?php echo $_SESSION['semestera'];?>></td>
		</tr>
		<tr>
			<td>Dep ID:</td>
			<td><input type="integer" name="dep_id" class="textinput" value=<?php echo $_SESSION['dep_ida'];?>></td>
		</tr>
		<tr>
			<td>Temp Roll:</td>
			<td><input type="integer" name="temp_roll" class="textinput" value=<?php echo $_SESSION['temp_rolla'];?>></td>
		</tr>

		<tr>
			<td><input type="submit" name="back_btn" value="Back"></td>
			<td><input type="submit" name="register_btn" value="Update"></td>
		</tr>
	</table>
</form>
</center>
</div>

</body>
</html>