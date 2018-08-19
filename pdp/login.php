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
		$username = test_input(mysql_real_escape_string($_POST['username']));
		$password = test_input(mysql_real_escape_string($_POST['password']));
		
		//$password = md5($password); //remember we hashed before storint last time
		$sql = "SELECT * FROM student_tbl WHERE stu_id='$username' AND password='$password'";
		$result = mysqli_query($db,$sql);

		if(mysqli_num_rows($result)==1){
			$_SESSION['message']="You are now logged in";
			$_SESSION['stu_id']=$username;
			$_SESSION['stu_password']=$password;
			header("location: student_login_page.php");
		}else{
			print "Username/password combination incorrect";
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}

?>
