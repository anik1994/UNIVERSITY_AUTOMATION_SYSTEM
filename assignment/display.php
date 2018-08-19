<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Download Files</title>
	<style type="text/css">
	#wrapper {
	margin: 0 auto;
	float: none;
	width:70%;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
    font-size:14;
    font-weight:bold;
}
		</style>
</head>
<body  align="center">

<br>
<div class="container home">
<font face="comic sans ms">
<h3><center> List of Files the can be download </center> </h3>
</font>
	
 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">ROLL</font></th>
    <th><font face="comic sans ms">COURSE_ID</font></th>
    <th><font face="comic sans ms">TOPIC</font></th>
    <th><font face="comic sans ms">TIME</font></th>
	<th><font face="comic sans ms">Download Files </font></th>
  </tr>
   </thead>
    <tbody>
    <?php
    	if(isset($_GET['idass'])) {
			$txt= $_GET['idass'];

			$_SESSION['course_id']=$txt;

		$link=mysql_connect("localhost","root","");
		mysql_select_db("test2",$link);
		$q="select count(*) \"total\"  from assignments";
		$ros=mysql_query($q,$link);
		$row=(mysql_fetch_array($ros));
		$total=$row['total'];
		$q="SELECT * FROM assignments where course_id= '".$txt."' ORDER BY time ASC";
		$ros=mysql_query($q,$link);
	
	while($row=mysql_fetch_array($ros))
	{
		echo '<tr>';
		echo '<td align=center>' . $row['roll'];
		echo '<td align=center>' .$row['course_id'];
		echo '<td align=center>' .$row['topic'];
		echo '<td align=center>' .$row['time'];
		echo "<td align=center><a title='Click here to download in file.' 
		     href='download.php?id={$row['file']}'>{$row['file']} </a>"; 
		echo '</tr>';
		
	}
}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	
?>

</div>
</body>
</html>								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
                        
						
  

