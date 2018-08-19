<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
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
    
    font-size:12;
    font-weight:bold;
}


	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Upload File</title>
    
        <?php
        	$today = date("Ymd");
			if(!empty($_POST))
			{
				$con = mysql_connect("localhost","root","");
				if (!$con)
					echo('Could not connect: ' . mysql_error());
				else
				{
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/" . $_FILES["file"]["name"]) ;
						mysql_select_db("test2", $con);
						$sql="insert into assignments (roll,course_id,topic,time, file) VALUES('".$_POST["roll"]."','".$_POST["course_id"]."','".$_POST["topic"]."','".$today."','".$_FILES["file"]["name"]."')";
						if (!mysql_query($sql,$con))
							echo('Error : ' . mysql_error());
						else
							echo '<script language="javascript">alert("Thank You!! File Uploded")</script>';
						}
				}
				mysql_close($con);
			}
        ?>
    </head>
     <body>
	   <div class="container home">
      <br>
		<h3><center> UPLOAD ASSIGNMENT </center> </h3> </font>

        <form id="form3" enctype="multipart/form-data" method="post" action="upload.php">
             <table class="table table-bordered">         	
                <tr>
                    <td>	<label for="roll">ROLL: </label>	</td>
                    <td>	<input type="text" name="roll" id="roll" class="input-medium"  
					         required autofocus placeholder="14.02.04.XXX"/>	</td>
                </tr>
                <tr>
                    <td>	<label for="course_id">Course ID: </label>	</td>
                    <td>	<input type="text" name="course_id" id="course_id" class="input-medium"  
					         required autofocus placeholder="CSE 3110"/></td>
                </tr>
                <tr>
                    <td>	<label for="topic">Topic: </label>	</td>
                    <td>	<input type="text" name="topic" id="topic" class="input-medium"  
					         required autofocus placeholder="AnyThing"/></td>
                </tr>
                <tr>
                    <td><label for="file">File:</label></td>
                    <td><input type="file" name="file" id="file" 
                        title="Click here to select file to upload." required /></td>
                </tr>
                <tr>
                  
				   <td colspan="2" align="center">		    
				   <input type="submit" class="btn btn-primary" name="upload" id="upload" 
				   title="Click here to upload the file." value="Upload File" /> </td>
                </tr>
            </table>
        </form>
		</div>
    </body>
</html>
