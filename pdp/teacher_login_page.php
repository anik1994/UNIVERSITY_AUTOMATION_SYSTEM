<?php
	session_start();


?>

<html>
<head>
<title> Teacher LogIn </title>
<style>
h1{
	background-color: #005100;
  color: white;
	border:2px solid black;
	border-radius: 15px;
	margin-top: 30px;
	margin-bottom: 80px;
	margin-right: 440px;
	margin-left: 440px;
	font-size: 25px
	font-type: Helvetic;
}
h2{
	background-color: #072b07;
	border:2px solid black;
	border-radius: 15px;
	margin-top: 60px;
	margin-bottom: 20px;
	margin-right: 440px;
	margin-left: 440px;
	font-size: 25px
	font-type: Helvetic;

}


body {  
        background-image: url("5.jpg");
     }

     .link_button {
  font-size: 22px;
  font-family: Tahoma;
  font-type: Helvetic;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px #072b07;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    background: #005100;
    color: #FFF;
    padding: 8px 12px;
    text-decoration: none;
}

</style>

</head>
<body>

<center><h1><?php echo $_SESSION['usernamefc']?></h1></center>


<center><a class="link_button" href="show_course.php">Show Course</a><br><br><br><br><br></center>

<center><a class="link_button" href="show_course_assignments.php">Assignments</a><br><br><br><br><br></center>

<center><a class="link_button" href="../lectures/Upload.php">Upload Lectures</a><br><br><br><br><br></center>

<center><a class="link_button" href="change_password_teacher.php">Change Password</a><br><br><br><br><br></center>

<center><a class="link_button" href="logout.php">Log Out</a><br></center>





</body>

</html>