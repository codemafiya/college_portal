<?php
	include("../function.php");
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$subject=$_POST['subject'];
	$text=$_POST['query_text'];
	$faculty=$_POST['faculty'];
	$login=$_POST['login'];
	$student=get_studid($login);
	$dt=$_POST['txtDate'];
	$stid=get_staffid($faculty);
	$res=mysqli_query($con,"insert into query (querysubject,querydate,querytext,staffid,studid, querystatus) values('$subject','$dt','$text','$stid','$student','Unanswered')");

	header("location: ./queries.php?msg=Query Added");
?>