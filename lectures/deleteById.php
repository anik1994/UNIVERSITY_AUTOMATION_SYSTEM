<?php 
include "connection.php"; 

$id = $_GET['id']; 

mysql_query("DELETE FROM assignments where id = '$id'"); 

header("Location: delete.php"); 



