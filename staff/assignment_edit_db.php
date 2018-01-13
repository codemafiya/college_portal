<?php
		define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_POST['id'];
	$title=$_POST['title'];
	$text=$_POST['assign_text'];
	$login=$_POST['login'];
	$sem=$_POST['sem'];
	$dt=$_POST['txtDate'];
	$res=mysqli_query($con,"update assignment set assigntitle='$title', assigndate='$dt', assigntext='$text', staffloginid='$login', studsemester='$sem' where assignid='$id'");

	header("location: ./assignment.php?msg=Assignment Edited");
?>