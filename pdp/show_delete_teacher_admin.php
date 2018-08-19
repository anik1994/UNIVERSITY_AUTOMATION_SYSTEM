<?php include("db.php"); ?>

<?php
	
	$sql = "select * from teacher_tbl";
	$query = mysql_query($sql) or die(mysql_error());

	if(isset($_GET['recordIdt'])){

		$tec_id=mysql_real_escape_string($_GET['recordIdt']);
		$sql_delete = "DELETE FROM teacher_tbl where tec_id='$tec_id'";

		mysql_query($sql_delete) or die(mysql_error());

		header("location: show_delete_teacher_admin.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		background-image: url("4.jpg");
	}

.phg{
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

.separator{

height:1px;

background:black;

border-bottom:1px solid #313030;

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
.link_button {
	font-size: 22px;
	font-family: Tahoma;
	font-type: Helvetic;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px #20538D;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    background: #4479BA;
    color: #FFF;
    padding: 8px 12px;
    text-decoration: none;
}

	</style>
</head>
<body>

<div class="container">
	<div class="content">
		<center><h1>Teachers</h1></center>
	</div>
</div>
<center>
<div class="container">
	<div class="content">
		<a class="link_button" href="add_new_teacher.php">Add New Teacher</a>
	</div>
	<br><br>
	<div class="content">
		<a class="link_button" href="admin.php">Back</a>
	</div>
</div>


<div class="container">
	<div class="content">
	<div class="phg">
	<?php if (mysql_num_rows($query)) { ?>
		<?php while($row=mysql_fetch_assoc($query)) { ?>
	
	<h4>Id: <?php echo $row['tec_id']; ?></h4>
	<h4>Name: <?php echo $row['name']; ?></h4>
	<h4>Email: <?php echo $row['email']; ?></h4>
	<div class="toolbar">
			<a class="link_button" href="show_delete_teacher_admin.php?recordIdt=<?php echo $row['tec_id']; ?>">Delete</a>
			<a class="link_button" href="edit_teacher_admin.php?recordId2t=<?php echo $row['tec_id']; ?>">Edit</a>
			</div>
			<?php echo "<br>"; ?>
			<div class="separator"></div>
	<?php } ?>
			

			<?php } else { ?>
			<h2>Nothing To display </h2>
			<?php } ?>

			</div>
	</div>
</div>
</center>

</body>
</html>