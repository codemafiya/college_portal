<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$sname=$_POST['surname'];
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sem=$_POST['semester'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	$res=mysqli_query($con,"insert into student (studsurname,studfirstname,studlastname,studsemester,studloginid,studpassword) values('$sname','$fname','$lname','$sem','$login','$pass')");
	header("location: ./student.php?msg=Student Added");
?>