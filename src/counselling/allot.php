<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	background-image: url(images/bg_16.gif);
}
.style1 {
	font-size: xx-large;
	color: #000033;
}
-->
</style></head>

<body>
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("test", $con);

// Execute query
$cap_course=mysql_query(" SELECT `seats` FROM `program` ");
$n=1;
while($tempo = mysql_fetch_array($cap_course))
{
$cap[$n]=$tempo[0];$n++;
}
$n--;

$x=mysql_query("SELECT COUNT(*) AS count FROM `sign_up`");
while($y=mysql_fetch_array($x))
{
$count=$y['count'];
}


for($q=0;$q<$count;$q++){

$cap1=$cap;

$min=mysql_query(" SELECT MIN(`rank`) AS `rank1` FROM `sign_up`");
while($temp= mysql_fetch_array($min))
{
$min_rank=$temp['rank1'];
}


$choi= mysql_query(" SELECT `userid`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `choice6`, `choice7`, `choice8`, `choice9`, `choice10` FROM `sign_up` WHERE (`rank`='$min_rank') ");

while($temp = mysql_fetch_array($choi)){
$id=$temp['userid'];
$choice[1]=$temp['choice1'];
$choice[2]=$temp['choice2'];
$choice[3]=$temp['choice3'];
$choice[4]=$temp['choice4'];
$choice[5]=$temp['choice5'];
$choice[6]=$temp['choice6'];
$choice[7]=$temp['choice7'];
$choice[8]=$temp['choice8'];
$choice[9]=$temp['choice9'];
$choice[10]=$temp['choice10'];
}
$choice[0]=$min_rank;

for($t=1;$t<11;$t++)
{
if($choice[$t]=='CS') $cap1[$t]=$cap[1]; 
if($choice[$t]=='EE') $cap1[$t]=$cap[2];
if($choice[$t]=='CE') $cap1[$t]=$cap[3];
if($choice[$t]=='MC') $cap1[$t]=$cap[4];
if($choice[$t]=='CH') $cap1[$t]=$cap[5];
if($choice[$t]=='ME') $cap1[$t]=$cap[6];
if($choice[$t]=='TE') $cap1[$t]=$cap[7];
if($choice[$t]=='EN') $cap1[$t]=$cap[8];
if($choice[$t]=='EP') $cap1[$t]=$cap[9];
if($choice[$t]=='NE') $cap1[$t]=$cap[10];
}

while(1)
{

if($cap1[1]>='1') 
{
if($choice[1]== 'CS') $cap[1]--;if($choice[1]== 'EE') $cap[2]--;
if($choice[1]== 'CE') $cap[3]--;if($choice[1]== 'CH') $cap[5]--;
if($choice[1]== 'MC') $cap[4]--;if($choice[1]== 'ME') $cap[6]--;
if($choice[1]== 'TE') $cap[7]--;if($choice[1]== 'NE') $cap[10]--;
if($choice[1]== 'EP') $cap[9]--;if($choice[1]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[1]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'"); break;
}
else if($cap1[2]>='1')
{
if($choice[2]== 'CS') $cap[1]--;if($choice[2]== 'EE') $cap[2]--;
if($choice[2]== 'CE') $cap[3]--;if($choice[2]== 'CH') $cap[5]--;
if($choice[2]== 'MC') $cap[4]--;if($choice[2]== 'ME') $cap[6]--;
if($choice[2]== 'TE') $cap[7]--;if($choice[2]== 'NE') $cap[10]--;
if($choice[2]== 'EP') $cap[9]--;if($choice[2]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[2]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[3]>='1')
{
if($choice[3]== 'CS') $cap[1]--;if($choice[3]== 'EE') $cap[2]--;
if($choice[3]== 'CE') $cap[3]--;if($choice[3]== 'CH') $cap[5]--;
if($choice[3]== 'MC') $cap[4]--;if($choice[3]== 'ME') $cap[6]--;
if($choice[3]== 'TE') $cap[7]--;if($choice[3]== 'NE') $cap[10]--;
if($choice[3]== 'EP') $cap[9]--;if($choice[3]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[3]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[4]>='1')
{
if($choice[4]== 'CS') $cap[1]--;if($choice[4]== 'EE') $cap[2]--;
if($choice[4]== 'CE') $cap[3]--;if($choice[4]== 'CH') $cap[5]--;
if($choice[4]== 'MC') $cap[4]--;if($choice[4]== 'ME') $cap[6]--;
if($choice[4]== 'TE') $cap[7]--;if($choice[4]== 'NE') $cap[10]--;
if($choice[4]== 'EP') $cap[9]--;if($choice[4]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[4]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[5]>='1')
{
if($choice[5]== 'CS') $cap[1]--;if($choice[4]== 'EE') $cap[2]--;
if($choice[5]== 'CE') $cap[3]--;if($choice[4]== 'CH') $cap[5]--;
if($choice[5]== 'MC') $cap[4]--;if($choice[4]== 'ME') $cap[6]--;
if($choice[5]== 'TE') $cap[7]--;if($choice[4]== 'NE') $cap[10]--;
if($choice[5]== 'EP') $cap[9]--;if($choice[4]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[5]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[6]>='1')
{
if($choice[6]== 'CS') $cap[1]--;if($choice[6]== 'EE') $cap[2]--;
if($choice[6]== 'CE') $cap[3]--;if($choice[6]== 'CH') $cap[5]--;
if($choice[6]== 'MC') $cap[4]--;if($choice[6]== 'ME') $cap[6]--;
if($choice[6]== 'TE') $cap[7]--;if($choice[6]== 'NE') $cap[10]--;
if($choice[6]== 'EP') $cap[9]--;if($choice[6]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[6]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[7]>='1')
{
if($choice[7]== 'CS') $cap[1]--;if($choice[7]== 'EE') $cap[2]--;
if($choice[7]== 'CE') $cap[3]--;if($choice[7]== 'CH') $cap[5]--;
if($choice[7]== 'MC') $cap[4]--;if($choice[7]== 'ME') $cap[6]--;
if($choice[7]== 'TE') $cap[7]--;if($choice[7]== 'NE') $cap[10]--;
if($choice[7]== 'EP') $cap[9]--;if($choice[7]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[7]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[8]>='1')
{
if($choice[8]== 'CS') $cap[1]--;if($choice[8]== 'EE') $cap[2]--;
if($choice[8]== 'CE') $cap[3]--;if($choice[8]== 'CH') $cap[5]--;
if($choice[8]== 'MC') $cap[4]--;if($choice[8]== 'ME') $cap[6]--;
if($choice[8]== 'TE') $cap[7]--;if($choice[8]== 'NE') $cap[10]--;
if($choice[8]== 'EP') $cap[9]--;if($choice[8]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[8]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[9]>='1')
{
if($choice[9]== 'CS') $cap[1]--;if($choice[9]== 'EE') $cap[2]--;
if($choice[9]== 'CE') $cap[3]--;if($choice[9]== 'CH') $cap[5]--;
if($choice[9]== 'MC') $cap[4]--;if($choice[9]== 'ME') $cap[6]--;
if($choice[9]== 'TE') $cap[7]--;if($choice[9]== 'NE') $cap[10]--;
if($choice[9]== 'EP') $cap[9]--;if($choice[9]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[9]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
else if($cap1[10]>='1')
{
if($choice[10]== 'CS') $cap[1]--;if($choice[10]== 'EE') $cap[2]--;
if($choice[10]== 'CE') $cap[3]--;if($choice[10]== 'CH') $cap[5]--;
if($choice[10]== 'MC') $cap[4]--;if($choice[10]== 'ME') $cap[6]--;
if($choice[10]== 'TE') $cap[7]--;if($choice[10]== 'NE') $cap[10]--;
if($choice[10]== 'EP') $cap[9]--;if($choice[10]== 'EN') $cap[8]--;
mysql_query("INSERT INTO `allotment`(`id`, `course`) VALUES ('$id','$choice[10]')");
mysql_query(" DELETE FROM `sign_up` WHERE `userid` = '$id'");break;
}
}
}

// allotment is done above

?>
<h1 align="center" class="style1">WELCOME TO COUNSELLING SYSTEM</h1>
<p>&nbsp;</p>
<p align="center"><strong>SUCCESSFULL ALLOTMENT</strong></p>
<p align="center">&nbsp;</p>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button8','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#A5ADB5','movie','button8' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
    <param name="movie" value="button8.swf" />
    <param name="quality" value="high" /><param name="BGCOLOR" value="#A5ADB5" />
    <embed src="button8.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#A5ADB5" ></embed>
  </object></noscript>
</p>
</body>
</html>
