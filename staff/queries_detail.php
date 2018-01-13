<?php
		define('servername','localhost');
	define('user','root');
	define('pass','');
	define('dbname','college_portal');
	$con=mysqli_connect(servername,user,pass,dbname);
	include("../function.php");
	chk_user();
	$id=$_GET['id'];
	$result=mysqli_query($con,"select * from query where queryid=$id");
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
.style1 {color: #990000}
.style3 {
	font-size: 16px;
	font-weight: bold;
}
.style4 {color: #990000; font-weight: bold; }
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
    <td id="mid" valign="top"><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="center">
          <table width="902" border="0" cellspacing="0" cellpadding="0" style="margin:10px;">
            <tr>
              <td id="profile_top"></td>
            </tr>
            <tr>
              <td id="profile_mid" valign="top"><div align="center">
              <table width="900" height="393" border="0" align="center" cellpadding="0" cellspacing="0">
              
              
              <tr>
                <td colspan="3" id="head_txt">Query Detail</td>
              </tr>
              <tr>
                <td colspan="3" id="head_txt3"><hr color="#990000" size="1px" width="95%" /></td>
              </tr>
              <tr>
                <td width="454"><div align="right" class="style1"><strong>Query Subject :&nbsp;</strong></div></td>
                <td width="251"><div align="left">
                    <?php echo $row['querysubject']; ?>
                </div></td>
                <td width="195">&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right" class="style4">Query Date :&nbsp;</div></td>
                <td><div align="left">
                   <?php echo $row['querydate']; ?></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right" class="style4">Query Text :&nbsp;</div></td>
                <td><div align="left">
                    <?php echo $row['querytext']; ?>
                </div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right" class="style4">Faculty  :&nbsp;</div></td>
                <td><div align="left">
                    <?php echo $row['staffid']; ?>
                </div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right"><strong>Student :&nbsp;</strong></div></td>
                <td><div align="left">
                  <?php echo $row['studid']; ?>
                </div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="37" colspan="3"><div align="center">
                    
                    <input type="button" name="button2" id="but_sub" value="Cancel" onclick="location.href='./queries.php'" />
                    </label>
                </div></td>
              </tr>
              <tr>
                <td colspan="3"><hr size="1px" color="#990000" width="95%"></td>
              </tr>
              <tr>
                <td height="37" colspan="3"><div align="center"><span class="style3">: Reply : </span></div></td>
              </tr>
              
              <tr>
                <td height="37" colspan="3"><div align="center">
                  <table width="50%" border="0" cellspacing="0" cellpadding="0" style="border:solid 1px #990000">
                    <tr>
                      <td><div align="center" style="margin:10px"><?php echo $row['queryreply']; ?></div></td>
                    </tr>
                  </table>
                </div></td>
              </tr>
              <?php 
              if($row['queryreply']=="")
              {
			  echo"
              <tr>
                <td height=20 colspan=3><hr size=1px color=#CCCCCC></td>
              </tr>
              
              <tr>
                <td height=21 colspan=3><div align=\"center\"><span class=\"style2\">Reply Query</span></div></td>
              </tr>
              <form id=\"form1\" name=\"form1\" method=\"post\" action=\"./queries_reply_db.php\">
              <input type=\"hidden\" name=\"id\" value=".$_GET['id'].">
              <tr>
                <td height=21 colspan=3><div align=\"center\">
                    <label>
                      <textarea name=\"reply\" id=\"textarea\" cols=\"45\" rows=\"5\"></textarea>
                      </label>
                  </div></td>
              </tr>
              <tr>
                <td height=\"21\" colspan=\"3\"><div align=\"center\">
                  <label>
                  <input type=\"submit\" name=\"button\" id=\"but_sub\" value=\"Reply\" />
                  </label>
                </div></td>
              </tr>
              </form>";
			  	}
              ?>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
              </div></td>
            </tr>
            <tr>
              <td id="profile_bot">&nbsp;</td>
            </tr>
          </table>
            
          
        </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr color="#FFDCB9" size="1px" width="98%"></td>
  </tr>
    <tr>
    <td id="footer"><?php include("./footer.php"); ?></td>
  </tr>
</table>
</body>
<script language="javascript">
	var dtCh= "/";
var minYear=1900;
var maxYear=2100;

function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   } 
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strDay=dtStr.substring(0,pos1)
	var strMonth=dtStr.substring(pos1+1,pos2)
	var strYear=dtStr.substring(pos2+1)
	strYr=strYear
	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	if (pos1==-1 || pos2==-1){
		alert("The date format should be : dd/mm/yyyy")
		return false
	}
	if (strMonth.length<1 || month<1 || month>12){
		alert("Please enter a valid month")
		return false
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		alert("Please enter a valid day")
		return false
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
		return false
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
		alert("Please enter a valid date")
		return false
	}
return true
}

function ValidateForm(){
	var dt=document.form1.txtDate
	if (isDate(dt.value)==false){
		dt.focus()
		return false
	}
    return true
 }
</script>

</html>
