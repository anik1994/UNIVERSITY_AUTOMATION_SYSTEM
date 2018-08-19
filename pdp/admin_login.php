<?php
	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	if(isset($_POST['login_btn'])){
		$username = test_input(mysql_real_escape_string($_POST['admin_id']));
		$password = test_input(mysql_real_escape_string($_POST['password_tf']));
		
		//$password = md5($password); //remember we hashed before storint last time
		$sql = "SELECT * FROM admin_tbl WHERE admin_id='$username' AND password='$password'";
		$result = mysqli_query($db,$sql);

		if(mysqli_num_rows($result)==1){
			
			header("location: admin.php");
		}else{
			print "Username/password combination incorrect";
			
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
<center><form METHOD="POST" ACTION="admin_login.php">
	
	
		<table>
		<tr>
			<td>Admin ID:</td>
			<td><input type="text" name="admin_id" class="textinput"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password_tf" class="textinput"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="LogIn"></td>
		</tr>
	</table>



	
</form></center>
</div>




</body>
</html>