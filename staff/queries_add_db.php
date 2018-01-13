<?php
		define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$subject=$_POST['subject'];
	$text=$_POST['query_text'];
	$faculty=$_POST['faculty'];
	$login=$_POST['login'];
	$student=get_studname($login);
	$dt=$_POST['txtDate'];
	$res=mysqli_query($con,"insert into query (querysubject,querydate,querytext,staffid,studid, querystatus) values('$subject','$dt','$text','$faculty','$student','Unanswered')");

	header("location: ./queries.php?msg=Query Added");
?>