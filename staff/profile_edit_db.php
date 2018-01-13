<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_POST['id'];
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$img=$_POST['img'];
	$hobby=$_POST['hobbies'];
	$qualification=$_POST['qualification'];
	$certification=$_POST['certification'];
	$experience=$_POST['experience'];
 	//Image Upload
	$uploaddir = '../img/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
	$fpath=$_FILES['userfile']['name'];
	if($fpath=="")
	{
		$fpath=$img;
	}
	if($img=="")
	{
		$img="default.gif";
	}
	$res=mysqli_query($con,"update staff set staffsurname='$sname', stafffirstname='$fname', stafflastname='$lname', staffemail='$email', staffqualification='$qualification', staffcertification='$certification', staffexperience='$experience', staffimg='$fpath', staffhobby='$hobby' where staffid=$id"); 
	
	header("location: ./profile.php?msg=Profile Successfully Edited");
?>