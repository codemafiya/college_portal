<?php
		define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$title=$_POST['title'];
	$text=$_POST['assign_text'];
	$login=$_POST['login'];
	$login=get_staffname($login);
	$sem=$_POST['sem'];
	$dt=$_POST['txtDate'];
	$res=mysqli_query($con,"insert into assignment (assigntitle,assigndate,assigntext,staffloginid,studsemester) values('$title','$dt','$text','$login','$sem')");

	header("location: ./assignment.php?msg=Assignment Added");
?>