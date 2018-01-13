<?php
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	$id=$_POST['id'];
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$result=mysqli_query($con,"select staffpassword from staff where staffloginid='$id'");
	$row=mysqli_fetch_array($result);
	if($row['staffpassword']==$opass and $id!=$npass)
	{
		$res=mysqli_query($con,"update staff set staffpassword='$npass' where staffloginid='$id'");
		header("location: ./profile.php?msg=Password Successfully Changed");		
	}
	else
	{
		header("location: ./profile.php?msg=Password Not Changed");		
	}
?>