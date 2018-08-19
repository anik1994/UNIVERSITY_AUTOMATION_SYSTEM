<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	if(isset($_POST['add_btn'])){
	
		$sdes_tf = mysql_real_escape_string($_POST['sdes_tf']);

		$news_tf = mysql_real_escape_string($_POST['news_tf']);

		$time=date("Ymd");

			

			$sql = "INSERT INTO news_tbl(sort_des,time,news) VALUES('$sdes_tf','$time','$news_tf')";
			mysqli_query($db,$sql);	

			header("location: news_show_admin.php");
		
	}

?>

<style type="text/css">
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
	<title>ADD NEW News</title>
</head>
<body>

<center><h1>Add New News</h1></center>

<div>
<center>
<form method="POST" action="add_news_admin.php">
	<table>
		<tr>
			<td>Short Des:</td>
			<td><input type="text" name="sdes_tf" class="textinput"></td>
		</tr>
		<tr>
			<td>News: </td>
			<td><textarea name="news_tf" rows="5" cols="20"></textarea></td>
		</tr>		

		<tr>
			<td></td>
			<td><input type="submit" name="add_btn" value="ADD"></td>
		</tr>
	</table>
</form>
</center>
</div>

<center><a class="link_button" href="../index.html">Back</a><br></center>

</body>
</html>