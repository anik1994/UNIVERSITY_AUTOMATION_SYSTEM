<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="ins.php">
		<input type="text" name="course_id">
		<input type="submit" name="btn">
	</form>
	<?php
	if(isset($_POST['btn'])){
		$course_id=$_POST['course_id'];
		$_SESSION['course']=$course_id;
	}
	?>
</body>
</html>