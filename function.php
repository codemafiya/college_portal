<?php
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
	function chk_admin($user)
	{
		$result=mysqli_query("select staffrole from staff where staffloginid='$user'");
		$row=mysqli_fetch_array($result);
		if($row['staffrole']=="admin")
		{
			$_SESSION['role']="admin";
		}
		else
		{
			$_SESSION['role']="other";
		}
	}
	function chk_user()
	{
		session_start();
		ob_start();
		if($_SESSION['cuser']=="")
		{
			header("location: ./logout.php");
		}
	}
	function login_log($user)
	{
			define('servername','localhost');
		define('user','root');
		define('pass','');
		define('dbname','college_portal');
		$con=mysqli_connect(servername,user,pass,dbname);
		if(!$con)
		{
			die("failed:" . mysqli_connect_error());
		}
		$date=date("d/m/Y");
		$time=date("H:i:s");
		$res=mysqli_query($con,"insert into logtable (loginid,logindate,logintime) values('$user','$date','$time')");
	}
	function logout_log($usr)
	{
			define('servername','localhost');
			define('user','root');
			define('pass','');
			define('dbname','college_portal');
			$con=mysqli_connect(servername,user,pass,dbname);
			if(!$con)
			{
				die("failed:" . mysqli_connect_error());
			}
		$date=date("d/m/Y");
		$time=date("H:i:s");
		$result=mysqli_query($con,"select logid from logtable where loginid='$usr' order by logid desc");
		$row=mysqli_fetch_array($result);
		$logid=$row['logid'];
		$res=mysqli_query($con,"update logtable set logouttime='$time', logoutdate='$date' where loginid='$usr' and logid='$logid'");
	}
	function get_staffname($user)
	{
			define('servername','localhost');
			define('user','root');
			define('pass','');
			define('dbname','college_portal');
			$con=mysqli_connect(servername,user,pass,dbname);
			$result=mysqli_query($con,"select * from staff where staffloginid='$user'");
			$row=mysqli_fetch_array($result);
			$name=$row['staffsurname']." ".$row['stafffirstname'];
			return $name;
	}
	function get_studname($user)
	{
			define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
			$result=mysqli_query($con,"select * from student where studid='$user'");
			$row=mysqli_fetch_array($result);
			$name=$row['studsurname']." ".$row['studfirstname'];
			return $name;
	}
	function get_studid($user)
	{
			define('servername','localhost');
			define('user','root');
			define('pass','');
			define('dbname','college_portal');
			$con=mysqli_connect(servername,user,pass,dbname);
			if(!$con)
			{
				die("failed:" . mysqli_connect_error());
			}
			$result=mysqli_query($con,"select * from student where studloginid='$user'");
			$row=mysqli_fetch_array($result);
			$id=$row['studid'];
			return $id;
	}
	function get_staffid($user)
	{
			define('servername','localhost');
			define('user','root');
			define('pass','');
			define('dbname','college_portal');
			$con=mysqli_connect(servername,user,pass,dbname);
			if(!$con)
			{
				die("failed:" . mysqli_connect_error());
			}
			$result=mysqli_query($con,"select * from staff where staffsurname='$user'");
			$row=mysqli_fetch_array($result);
			$id=$row['staffid'];
			return $id;
	}
	
	
	function get_blogreply($blogid)
	{
		define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
		$result=mysqli_query($con,"select * from blogreply where blogid='$blogid'");
		$row=mysqli_num_rows($result);
		return $row;
	}
	function blog_visit($bid)
	{
		define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
		$result=mysqli_query($con,"select blogvisit from blog where blogid='$bid'");
		$row=mysqli_fetch_array($result);
		$visit=$row['blogvisit'];
		$visit++;
		$res=mysqli_query($con,"update blog set blogvisit=$visit where blogid=$bid");
	}
?>