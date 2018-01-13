<?php
			define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$id=$_POST['id'];
	$subject=$_POST['subject'];
	$text=$_POST['query_text'];
	$faculty=$_POST['faculty'];
	$login=$_POST['login'];
	$student=get_studname($login);
	$dt=$_POST['txtDate'];
	$res=mysqli_query($con,"update query set querysubject='$subject', querydate='$dt', querytext='$text', staffid='$faculty', studid='$student' where queryid='$id'");

	header("location: ./queries.php?msg=Query Edited");
?>