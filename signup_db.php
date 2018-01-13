<?php
	session_start();
	ob_start();
	
    error_reporting(E_ALL ^ E_NOTICE);
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	if(!$con)
	{
		die("failed:" . mysqli_connect_error());
	}
	include("./function.php");
	$nname=$_POST['nname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sem=$_POST['sem'];
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	$no=$_POST['no'];
	$result=mysqli_query($con,"select * from student where studloginid='$username' or num='$no'");
	if(mysqli_num_rows($result)>0)
	{
		
		header("location: ./index.php?msg=User Name Already Exist");
	}
	else
	{
		$res=mysqli_query($con,"insert into student (studsurname,studfirstname,studlastname,studsemester,studloginid,studpassword,no) values('$nname','$fname','$lname','$sem','$username','$pass','$no')");
		header("location: ./login.php?msg=Successfull");
		
	}
	
?>