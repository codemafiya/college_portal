<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$id=$_POST['id'];
	$reply=$_POST['reply'];
	$res=mysqli_query($con,"update query set queryreply='$reply', querystatus='Answered' where queryid='$id'");

	header("location: ./queries.php?msg=Query Edited");
?>