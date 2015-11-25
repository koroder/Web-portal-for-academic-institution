<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title><style type="text/css">
<!--
.style2 {font-size: x-large}
body {
	background-image: url(../images/bg_16.gif);
}
.style3 {
	color: #000033;
	font-size: 18px;
}
.style5 {font-size: 18px}
-->
</style>
<script src="../scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<div align="center">
  <p><strong><span class="style2"><?php echo $_COOKIE["user"]; ?> <span class="style3">HAS BEEN ALLOTED FOLLOWING COURSES</span></span></strong></p>
  <p class="style5">&nbsp;</p>
</div>
<div align="center">
  <p>
    <?php
$user = $_COOKIE["user"];
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("ratan", $con);


$alloted= mysql_query("SELECT `course` FROM `reg` WHERE `user`='$user'");
$m=0;
while($c = mysql_fetch_array($alloted))
{
echo $c['course'];
$alloted_courses[$m]=$alloted['course'];$m++;
echo "<br />";
}
$m--;

//$alloted_courses[] contains all courses user got, 0-$m is the index.
if( $m != -1)
{
	for($h=0;$h < $m+1; $h++)
		echo $alloted_courses[$h]."<br />";
}
?>
  </p>
</div>
<p>&nbsp;</p>
<p align="center">
  <label>
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button9','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#ACAFAC','movie','button9' ); //end AC code
</script><noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
  <param name="movie" value="button9.swf" />
  <param name="quality" value="high" /><param name="BGCOLOR" value="#ACAFAC" />
  <embed src="button9.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#ACAFAC" ></embed>
</object>
</noscript>
  </label>
</p>
</body>
</html>
