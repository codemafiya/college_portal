<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_POST['id'];
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$designation=$_POST['desig'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	$role=$_POST['role'];
	$res=mysqli_query($con,"update staff set staffsurname='$sname', stafffirstname='$fname', stafflastname='$lname', staffdesignation='$designation', staffloginid='$login', staffpassword='$pass', staffrole='$role' where staffid=$id"); 
	
	header("location: ./staff.php?msg=staff Successfully Edited");
?>