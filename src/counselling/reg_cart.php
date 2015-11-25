
<?php $temp_user= $_COOKIE["uid"]; ?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
body {
	background-image: url(../room_booking/academic-education/images/bg_16.gif);
}
.style1 {
	font-size: xx-large;
	color: #FFCC00;
}
.style3 {
	font-size: x-large;
	color: #FF3300;
}
.style4 {
	font-size: medium;
	color: #0033FF;
}
.style6 {
	font-size: 14px;
	color: #CCFF33;
}
.style7 {font-size: 24px; color: #FFCC00; }
.style8 {
	font-size: xx-large;
	color: #000066;
}
-->
</style>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<div align="center">
  <p class="style7 style8">REGISTRATION CART  </p>
  <p>
    <span class="style6">
    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);

$rows=mysql_query("SELECT * FROM `sign_up`");
$num_rows = mysql_num_rows($rows);
if($num_rows==0)
{$temp=0;
printf("   CART IS EMPTY  \n");}
else
{$temp=1;}
$result1=mysql_query("SELECT `choice1` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result1))
{
$p1=$row['choice1'];
echo "<br />";
}
echo "<br />";
echo $p1;
} 
$result2=mysql_query("SELECT `choice2` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result2))
{$p2=$row['choice2'];
echo "<br />";}
echo "<br />";
echo $p2;
}
$result3=mysql_query("SELECT `choice3` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result3))
{$p3=$row['choice3'];
echo "<br />";}
echo "<br />";
echo $p3;
}
$result4=mysql_query("SELECT `choice4` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result4))
{$p4=$row['choice4'];
echo "<br />";}
echo "<br />";
echo $p4;
}
$result5=mysql_query("SELECT `choice5` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result5))
{$p5=$row['choice5'];
echo "<br />";}
echo "<br />";
echo $p5;
}
$result6=mysql_query("SELECT `choice6` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result6))
{$p6=$row['choice6'];
echo "<br />";}
echo "<br />";
echo $p6;
}
$result7=mysql_query("SELECT `choice7` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result7))
{$p7=$row['choice7'];
echo "<br />";}
echo "<br />";
echo $p7;
}
$result8=mysql_query("SELECT `choice8` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result8))
{$p8=$row['choice8'];
echo "<br />";}
echo "<br />";
echo $p8;
}
$result9=mysql_query("SELECT `choice9` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result9))
{$p9=$row['choice9'];
echo "<br />";}
echo "<br />";
echo $p9;
}
$result10=mysql_query("SELECT `choice10` FROM `sign_up` WHERE (userid = '$temp_user')");
if($temp){
while($row = mysql_fetch_array($result10))
{$p10=$row['choice10'];
echo "<br />";}
echo "<br />";
echo $p10;
}
?>
  </span></p>
  <p class="style3">&nbsp;    </p>
</div>
<p align="center" class="style1">&nbsp;</p>
<p align="center" class="style4">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button6','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#9CB5B5','movie','button6' ); //end AC code
  </script>
  <noscript>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
    <param name="movie" value="button6.swf">
    <param name="quality" value="high">
    <param name="BGCOLOR" value="#9CB5B5">
    <embed src="button6.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#9CB5B5" ></embed>
  </object>
  </noscript>
</p>
</body>
</html>
