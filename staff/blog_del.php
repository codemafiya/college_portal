<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_GET['id'];
	$res=mysqli_query($con,"delete from blog where blogid=$id");
	header("location: ./blog.php?msg=blog Deleted");
?>