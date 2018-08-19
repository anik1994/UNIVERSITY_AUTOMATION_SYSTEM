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

	if(isset($_POST['login_btnfc'])){
		$usernamefc = test_input(mysql_real_escape_string($_POST['usernamefc']));
		$passwordfc = test_input(mysql_real_escape_string($_POST['passwordfc']));
		
		//$password = md5($password); //remember we hashed before storint last time
		$sql = "SELECT * FROM teacher_tbl WHERE email='$usernamefc' AND password='$passwordfc'";
		$result = mysqli_query($db,$sql);

		if(mysqli_num_rows($result)==1){
			$_SESSION['message']="You are now logged in";
			$_SESSION['usernamefc']=$usernamefc;
			$_SESSION['passwordfc']=$passwordfc;
			header("location: teacher_login_page.php");
		}else{
			print "Username/password combination incorrect";
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}

?>
