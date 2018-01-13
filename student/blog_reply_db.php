<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	$id=$_POST['id'];
	$login=$_POST['login'];
	$reply=$_POST['reply'];
	$res=mysqli_query($con,"insert into blogreply values('$id', '$login', '$reply')");
	header("location: ./blog_detail.php?id=$id");
?>