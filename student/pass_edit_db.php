<?php
session_start();
ob_start();
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_SESSION['cuser'];
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$result=mysqli_query($con,"select studpassword from student where studloginid='$id'");
	$row=mysqli_fetch_array($result);
	if($row['studpassword']==$opass and $id!=$npass)
	{
		$res=mysqli_query($con,"update student set studpassword='$npass' where studloginid='$id'");
		header("location: ./profile.php?msg=Password Successfully Changed");		
	}
	else
	{
		header("location: ./profile.php?msg=Password Not Changed");		
	}
?>