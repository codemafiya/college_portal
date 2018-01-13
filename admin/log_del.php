<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_GET['id'];
	$res=mysqli_query($con,"delete from logtable");
	header("location: ./log.php?msg=Log Cleared");
?>