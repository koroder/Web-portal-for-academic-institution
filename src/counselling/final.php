<?php $temp_user= $_COOKIE["uid"]; ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../room_booking/academic-education/images/bg_16.gif);
}
-->
</style>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>


<p align="center">
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);
$result1=mysql_query("SELECT `course` FROM `allotment` WHERE (`id` = '$temp_user')");
while($row = mysql_fetch_array($result1))
{
$p=$row['course'];
echo "<br />";
}
echo "<br />";
printf("     ");
if(isset($p))
{
echo $p;
}
else echo "PROGRAMMES HAVE NOT BEEN ALLOTTED YET";
?>
</p>
<p align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button5','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#A5ADB5','movie','button5' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
    <param name="movie" value="button5.swf">
    <param name="quality" value="high"><param name="BGCOLOR" value="#A5ADB5">
    <embed src="button5.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#A5ADB5" ></embed>
  </object></noscript>
</p>
</body>
</html>
