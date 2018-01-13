<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$id=$_POST['id'];
	$subject=$_POST['subject'];
	$text=$_POST['blog_text'];
	$res=mysqli_query($con,"update blog set blogsubject='$subject', blogtext='$text' where blogid='$id'");

	header("location: ./blog.php?msg=Blog Edited");
?>