<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	if(isset($_POST['back_btn'])){
		header("location: show_delete_teacher_admin.php");
	}

	if(isset($_POST['register_btn'])){
		$tec_id = mysql_real_escape_string($_POST['tec_id']);
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);
	
		$dep_id = mysql_real_escape_string($_POST['dep_id']);

		$salary = mysql_real_escape_string($_POST['salary']);


		if($password == $password2){

			$qry="SELECT * FROM dep_tbl WHERE dep_id='$dep_id'";

			$result = mysqli_query($db,$qry);
			
			$num_rows = mysqli_num_rows($result);
			if($num_rows > 0){

			$sql = "INSERT INTO teacher_tbl(dep_id,tec_id,name,email,password,salary) VALUES('$dep_id','$tec_id','$name','$email','$password','$salary')";
			mysqli_query($db,$sql);



		}
		else{
    		//echo "Dep_id is not valid!!!";
			}
			
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

<center><h1>Add New Teacher</h1></center>

<div>
<center>
<form method="POST" action="add_new_teacher.php">
	<table>
		<tr>
			<td>Teacher ID:</td>
			<td><input type="text" name="tec_id" class="textinput"></td>
		</tr>
		<tr>
			<td>Teacher Name:</td>
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
			<td>Dep ID:</td>
			<td><input type="integer" name="dep_id" class="textinput"></td>
		</tr>
		<tr>
			<td>Salary :</td>
			<td><input type="integer" name="salary" class="textinput"></td>
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