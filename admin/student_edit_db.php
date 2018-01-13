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
	$sem=$_POST['semester'];
	$login=$_POST['loginid'];
	$pass=$_POST['password'];
	$res=mysqli_query($con,"update student set studsurname='$sname', studfirstname='$fname', studlastname='$lname', studsemester='$sem', studloginid='$login', studpassword='$pass' where studid=$id");
	
	header("location: ./student.php?msg=Student Successfully Edited");
?>