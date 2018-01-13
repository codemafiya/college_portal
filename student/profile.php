<?php
	session_start();
	ob_start();
	include("../function.php");
	define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	chk_user();
	$id=$_SESSION['cuser'];
	$result=mysqli_query($con,"select * from student where studloginid='$id'");
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Portal</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {
	font-size: 16px
}
.style3 {font-size: 16px; font-weight: bold; }
-->
</style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="main">
  <tr>
    <td id="top"><table width="100%" height="32" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="98%"><div align="right">Welcome <strong><?php echo $_SESSION['cuser']; ?> - <a href="./logout.php">Logout</a></strong></div></td>
        <td width="2%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td id="head">&nbsp;</td>
  </tr>
  <tr>
    <td id="menu"><?php include("menu.php"); ?></td>
  </tr>
  <tr>
    <td id="mid" valign="top"><div align="center">
      <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
        <tr>
          <td id="profile_top"></td>
        </tr>
        <tr>
          <td id="profile_mid" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:5px;">
              <tr>
                <td colspan="3"><div align="center"><?php=$_GET['msg']; ?></div></td>
                </tr>
              <tr>
                <td width="4%" height="61">&nbsp;</td>
                <td colspan="2"><div align="left"><span class="style1">&nbsp;
                  <?php echo $row['studfirstname']." ".$row['studlastname']; ?>'s Profile</span></div></td>
              </tr>
              <tr>
                <td colspan="3"><hr size="1px" color="#990000" width="93%"></td>
                </tr>
              <tr>
                <td colspan="3"><div align="center">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="225" height="28"><div align="right" class="style1 style2">Student Surname : </div></td>
                      <td width="473"><div align="left">
                          &nbsp;<?php echo $row['studsurname']; ?>
                      </div></td>
                      <td width="35"><div align="right"><a href="./profile_edit.php?id=<?php echo $_SESSION['cuser']; ?>"><img src="images/edit_f2.png" alt="Edit Profile" width="25" height="25" border="0" /></a></div></td>
                      <td width="164"><div align="left">&nbsp;<strong><a href="./profile_edit.php?id=<?php=$_SESSION['cuser']; ?>" style="color:#990000">Edit Profile</a></strong></div></td>
                    </tr>
                    
                    <tr>
                      <td height="25"><div align="right" class="style3">Student Firstname : </div></td>
                      <td><div align="left">
                           &nbsp;<?php echo $row['studfirstname']; ?>
                      </div></td>
                      <td><div align="right"><a href="./pass_edit.php?id=<?php=$_SESSION['cuser']; ?>"><img src="images/security_f2.jpg" alt="Edit Profile" width="25" height="25" border="0" /></a></div></td>
                      <td><div align="left">&nbsp;<strong><a href="./pass_edit.php?id=<?php=$_SESSION['cuser']; ?>" style="color:#990000">Change Password</a></strong></div></td>
                    </tr>
                    <tr>
                      <td height="25"><div align="right" class="style3">Student Lastname : </div></td>
                      <td><div align="left">
                          &nbsp;<?php echo $row['studlastname']; ?>
                      </div></td>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25"><div align="right" class="style3">Student Semester : </div></td>
                      <td><div align="left">
                          &nbsp;<?php echo $row['studsemester']; ?>
                      </div></td>
                      <td colspan="2"><div align="left"></div>                        </td>
                    </tr>
                    <tr>
                      <td height="25"><div align="right" class="style3">Student Loginid : </div></td>
                      <td><div align="left">
                          &nbsp;<?php echo $row['studloginid']; ?>
                      </div></td>
                      <td colspan="2"><div align="left"></div>                        </td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2"><div align="center">
                          <label></label>
                      </div></td>
                      <td colspan="2"><div align="left"></div>                        </td>
                    </tr>
                  </table>
                </div></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td id="profile_bot">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><?php include("./footer.php"); ?></td>
  </tr>
</table>
	
</body>
</html>
