<?php
	session_start();

	//connect to database
$db = mysqli_connect("localhost","root","","authentication");

//$stu_id=$_SESSION['stu_id'];
//$previous_password=$_SESSION['stu_password'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<style type="text/css">

		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 150px;
			background-image: url("5.jpg");
			
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}
		input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
	div{
	background-color:#085923;
	font-size: 22px;
	font-family: Tahoma;
	font-type: Helvetic;
	color: black;
	margin-top:100px;
	margin-bottom: 50px;
	margin-left:200px;
	margin-right:200px;
	border: 2px solid black;
	border-radius: 15px;
	
}

	</style>
</head>
<body>
<div>
<center><form METHOD="POST" ACTION="change_password_student.php">
	
	
		<table>
		<tr>
			<td>Current Password</td>
			<td><input type="password" name="current_password" class="textinput"></td>
		</tr>
		<tr>
			<td>New Password:</td>
			<td><input type="password" name="password_tf" class="textinput"></td>
		</tr>
		<tr>
			<td>Confirm New Password:</td>
			<td><input type="password" name="password_tf2" class="textinput"></td>
		</tr>


		<tr>
			<td><input type="submit" name="back_btn" value="Back"></td>
			<td><input type="submit" name="update_btn" value="Update Password"></td>
		</tr>
	</table>



	
</form></center>
</div>

<?php


if((isset($_POST['back_btn']))){
	header("location: student_login_page.php");
}


if((isset($_POST['update_btn']))){

	$db = mysqli_connect("localhost","root","","authentication");
	
	$stu_id=$_SESSION['stu_id'];
	//$password = mysql_real_escape_string($_POST['password_tf']);
	

$prev_password=$_SESSION['stu_password'];

$current_password = mysql_real_escape_string($_POST['current_password']);
$password1 = mysql_real_escape_string($_POST['password_tf']);
$password2 = mysql_real_escape_string($_POST['password_tf2']);

if(($current_password==$prev_password) && ($password1==$password2)){

$sql = "update student_tbl set password='$password1' where stu_id='$stu_id'";
$result = mysqli_query($db,$sql);

print "password changed successfully";

}
else{
	print "Failed!! Try Again";
}

}

?>


</body>
</html>