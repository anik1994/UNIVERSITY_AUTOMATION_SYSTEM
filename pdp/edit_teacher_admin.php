<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	//$_SESSION['stu_ida']="asif";

	if(isset($_GET['recordId2t'])){

		$tec_id=mysql_real_escape_string($_GET['recordId2t']);
		$_SESSION['tec_idaa']=$tec_id;
		//print "$stu_id";
		$sql = "SELECT * FROM teacher_tbl where tec_id='$tec_id'";
		$result = mysqli_query($db,$sql);

		while($row = mysqli_fetch_array($result)) 
		{ 
			$_SESSION['tec_idat']=$row['tec_id'];
			$_SESSION['nameat']=$row['name'];
			$_SESSION['emailat']=$row['email'];
			$_SESSION['salaryat']=$row['salary'];
			$_SESSION['dep_idat']=$row['dep_id'];


		}	 

	}

	if(isset($_POST['back_btn'])){
		header("location: show_delete_teacher_admin.php");
	}

	if(isset($_POST['register_btn'])){
		$tec_id = mysql_real_escape_string($_POST['tec_id']);
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		//$password = mysql_real_escape_string($_POST['password']);
		//$password2 = mysql_real_escape_string($_POST['password2']);
	
		$dep_id = mysql_real_escape_string($_POST['dep_id']);

		$salary = mysql_real_escape_string($_POST['salary']);



		$teacher=$_SESSION['tec_idaa'];

			$qry="SELECT * FROM dep_tbl WHERE dep_id='$dep_id'";

			$result = mysqli_query($db,$qry);
			
			$num_rows = mysqli_num_rows($result);
			if($num_rows > 0){

			$sql = "UPDATE teacher_tbl set dep_id='$dep_id',name='$name',email='$email',salary='$salary' where tec_id='$teacher'";
			mysqli_query($db,$sql);

			header("location: show_delete_teacher_admin.php");

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
	<title>Update Teacher</title>
</head>
<body>

<center><h1>Update Teacher</h1></center>

<div>
<center>
<form method="POST" action="edit_teacher_admin.php">
	<table>
		<tr>
			<td>Teacher ID:</td>
			<td><input type="text" name="tec_id" class="textinput" value=<?php echo $_SESSION['tec_idat'];?>></td>
		</tr>
		<tr>
			<td>Teacher Name:</td>
			<td><input type="text" name="name" class="textinput"  value=<?php echo $_SESSION['nameat'];?>></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textinput"  value=<?php echo $_SESSION['emailat'];?>></td>
		</tr>
		
		
		<tr>
			<td>Salary :</td>
			<td><input type="integer" name="salary" class="textinput"  value=<?php echo $_SESSION['salaryat'];?>></td>
		</tr>
		<tr>
			<td>Dep ID:</td>
			<td><input type="integer" name="dep_id" class="textinput" value=<?php echo $_SESSION['dep_idat'];?>></td>
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