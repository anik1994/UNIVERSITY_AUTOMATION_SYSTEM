<?php

	session_start();

	//connect to database
	$db = mysqli_connect("localhost","root","","authentication");

	if(isset($_GET['id_course'])) {
		$course_id= $_GET['id_course'];
		$_SESSION['courseid']=$course_id;
		$no="no";
	$sql = "SELECT * FROM result_table where course_id='$course_id' and approved='$no'";
	$result = mysqli_query($db,$sql);

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<table class="data-table">
		<caption class="title"></caption>
		<thead>
			<tr>
				<th>Student ID</th>
				<th>Number</th>
				<th>Approve</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while($row = mysqli_fetch_assoc($result)){
$_SESSION['row'] = $row;

echo "<tr>";  

 

echo "<td>". $row['stu_id'] ."</td>"; 
echo "<td>". $row['number'] ."</td>";  
echo "<td>". $row['approved'] ."</td>";    
  
 
echo "</tr>"; 
		 
}
		?>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
	
	<?php print "<br>"; ?>
	</div>

	<form method="POST" action="approve_admin_result.php">

	<table>
		<tr>
			<td><input type="submit" name="back_btn" value="Back"></td>
			<td><input type="submit" name="approve_btn" value="Approve"></td>
		</tr>
		</table>

	</form>

	<?php
		$course_id=$_SESSION['courseid'];
		if(isset($_POST['back_btn'])){
			header("location: approve_admin.php");
		}
		$yes="yes";
		if(isset($_POST['approve_btn'])){
			
			$sql = "Update result_table set approved='$yes' where course_id='$course_id' ";
			$result = mysqli_query($db,$sql);
			header("location: approve_admin.php");
		}

	?>

</body>
</html>