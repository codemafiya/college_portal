<?php
	session_start();
	ob_start();
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$subject=$_POST['subject'];
	$text=$_POST['blog_text'];
	$login=$_POST['login'];
	$student=get_studname($login);
	$dt=date("d/m/Y");
	$res=mysqli_query($con,"insert into blog (blogsubject,blogdate,blogtext,loginid,blogvisit) values('$subject','$dt','$text','$login',0)");

	header("location: ./blog.php?msg=Blog Added");
?>