<?php
	session_start();
	ob_start();
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
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
			login_log($user);
			header("location: ./home.php");			
		}
		else
		{
			header("location: ./index.php");
		}
	}
	else
	{
		$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffpassword']==$pass)
		{
			$_SESSION['cuser']=$user;
			chk_admin($user);
			login_log($user);
			header("location: ./home.php");			
		}
		else
		{
			header("location: ./index.php");
		}
	}
?>