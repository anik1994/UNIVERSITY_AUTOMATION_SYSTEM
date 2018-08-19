<?php
	session_start();

$col="Student Id";
$col2="Number";
$col3="Grade";
	//connect to database
$db = mysqli_connect("localhost","root","","authentication");
if(isset($_GET['id'])) {
$stu_id= $_GET['id'];
$_SESSION['stu_id']=$stu_id;
$course_id=$_SESSION['course_id'];
//print "$course_id"."<br>";
//print "$stu_id";
}
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
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color:#1a5e28;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color:#f4fbff;
			text-align: center;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			text-align: center;
		}
		.data-table tbody tr:hover td {
			background-color: #06230a;
			border-color: #138411;

		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;

		}
						.phg{
	background-color:#318c69;
	font-size: 22px;
	font-family: Tahoma;
	font-type: Helvetic;
	color: black;
	margin-top:60px;
	margin-bottom: 50px;
	margin-left:200px;
	margin-right:200px;
	border: 2px solid black;
	border-radius: 15px;
	
}
		input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
	</style>
</head>
<body>
<div class="phg">
<center><form METHOD="POST" ACTION="update_result_hp.php">
	


			<table>
		<tr>
			<td>Enter New Number</td>
			<td><input type="text" name="number_tf" class="textinput"></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="home_btn" value="Back"></td>
			<td><input type="submit" name="update_btn" value="Update Result"></td>
		</tr>
	</table>
	
</form></center>
</div>


<table class="data-table">
		<caption class="title"></caption>
				<thead>
			<tr>
 <?php
 if(isset($_POST['update_btn'])){
                echo "<th>";
                echo $col;
                echo "</th>";

                echo "<th>";
                echo $col2;
                echo "</th>";

                echo "<th>";
                echo $col3;
                echo "</th>";
            }
            
  ?>
			</tr>

		</thead>
		<tbody>

<?php

if(isset($_POST['update_btn'])){

function gradeFunction($num){
	if($num>=80){
		return "a+";
	}
	if($num>=75){
		return "a";
	}
	if($num>=70){
		return "a-";
	}
	if($num>=65){
		return "b+";
	}
	if($num>=60){
		return "b";
	}
	if($num>=55){
		return "b-";
	}
	if($num>=50){
		return "c+";
	}
	if($num>=45){
		return "c-";
	}
	if($num>=40){
		return "d";
	}
	if($num<40){
		return "f";
	}
}


	$db = mysqli_connect("localhost","root","","authentication");

	$stu_id=$_SESSION['stu_id'];
	$course_id=$_SESSION['course_id'];
	$number = mysql_real_escape_string($_POST['number_tf']);

	$grade=gradeFunction($number);
	//print "$grade";
	$no="no";

$sql = "update result_table set number='$number',grade='$grade',approved='$no' where course_id='$course_id' and stu_id='$stu_id'";
$result = mysqli_query($db,$sql);

$sql = "SELECT * FROM result_table where course_id='$course_id'";
$result = mysqli_query($db,$sql);


while($row = mysqli_fetch_array($result)) 
{ 
echo "<tr>"; 

echo "<td><a href='update_result_hp.php?id=" . $row['stu_id'] . "'>". $row['stu_id']  ."</a></td>"; 
echo "<td>" . $row['number'] . "</td>"; 
echo "<td>" . $row['grade'] . "</td>"; 
echo "</tr>"; 
} 

}

?>

		</tbody>
		<tfoot>
		</tfoot>
	</table>
	<?php
	if(isset($_POST['home_btn'])){
	 header("location: show_course.php");
	}

	?>
	
	

</body>
</html>