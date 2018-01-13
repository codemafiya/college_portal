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
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$category=$_POST['category'];
	if($category=="student")
	{
		$result=mysqli_query($con,"select * from student where studloginid='$user'");
		$row=mysqli_fetch_array($result);
		
		if($row['studpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			$_SESSION['role']=$category;
 			$_SESSION['sem']=$row['studsemester'];
			login_log($user);
			header("location: ./student/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
	else if($category=="staff")
	{
		$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			chk_admin($user);
			login_log($user);
			header("location: ./staff/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
	}
	else
	{
		$result=mysqli_query($con,"select * from admin where adminloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			chk_admin($user);
			login_log($user);
			header("location: ./admin/home.php");			
		}
		else
		{
			header("location: ./index.php?msg=Invalid Username or Password");
		}
		
	}
?>