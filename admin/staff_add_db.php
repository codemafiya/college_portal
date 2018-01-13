<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['designation'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	$role=$_POST['role'];
	$res=mysqli_query($con,"insert into staff (staffsurname,stafffirstname,stafflastname,staffdesignation,staffloginid,staffpassword,staffrole,staffimg) values('$sname','$fname','$lname','$designation','$login','$pass','$role','default.gif')");
	header("location: ./staff.php?msg=staff Added");
?>