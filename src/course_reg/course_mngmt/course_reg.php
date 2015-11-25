<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(../images/bg_16.gif);
}
.style1 {
	font-size: xx-large;
	color: #000000;
}
.style2 {font-size: medium}
.style3 {color: #000033}
-->
</style>
<script src="../scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

<div align="center" class="style1">
  <p align="center" class="style3"><strong>WELCOME <?php echo $_COOKIE["user"]; ?> TO COURSE REGISTRATION</strong></p>
  <p align="center" class="style3">&nbsp;</p>
  <?php
  
 $con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("ratan", $con);
// Execute query
$res=mysql_query("SELECT `course` FROM `list` WHERE `cat`='DC'");
//echo $result;
$j=0;
while($row = mysql_fetch_array($res))
{
//echo $row['course'];
$course_dc[$j]=$row['course'];
//echo $course_dc[$j];
$j++;
//echo "<br />";
}
$j--;
  
// Execute query
$res2=mysql_query("SELECT `course` FROM `list` WHERE `cat`='OC'");
//echo $result;
$i=0;
while($row = mysql_fetch_array($res2))
{
//echo $row['course'];
$course_oc[$i]=$row['course'];
//echo $course_oc[$i];
$i++;
//echo "<br />";
}
$i--;  
  
  ?>
  <form id="form1" name="form1" method="post" action="dc.php">
    <label>
    <div align="center"><strong>Departmental Courses</strong><br />
      <select name="dc" id="dc">
        <option>select</option>
        <option value=<?php if(sizeof($course_dc)>0) echo $course_dc[0]; else echo " ";?>><?php if(sizeof($course_dc)>0) echo $course_dc[0]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>1) echo $course_dc[1]; else echo " ";?>><?php if(sizeof($course_dc)>1) echo $course_dc[1]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>2) echo $course_dc[2]; else echo " ";?>><?php if(sizeof($course_dc)>2) echo $course_dc[2]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>3) echo $course_dc[3]; else echo " ";?>><?php if(sizeof($course_dc)>3) echo $course_dc[3]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>4) echo $course_dc[4]; else echo " ";?>><?php if(sizeof($course_dc)>4) echo $course_dc[4]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>5) echo $course_dc[5]; else echo " ";?>><?php if(sizeof($course_dc)>5) echo $course_dc[5]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>6) echo $course_dc[6]; else echo " ";?>><?php if(sizeof($course_dc)>6) echo $course_dc[6]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>7) echo $course_dc[7]; else echo " ";?>><?php if(sizeof($course_dc)>7) echo $course_dc[7]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>8) echo $course_dc[8]; else echo " ";?>><?php if(sizeof($course_dc)>8) echo $course_dc[8]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_dc)>9) echo $course_dc[9]; else echo " ";?>><?php if(sizeof($course_dc)>9) echo $course_dc[9]; else echo " ";?></option>
      </select>
       <input type="submit" name="ADD" id="ADD" value="ADD" />
       <br />
      </label>
    </div>
  </form>
  <form id="form2" name="form2" method="post" action="oc.php">
    <label>
    <div align="center"><strong>Open Category Courses</strong><br />
      <select name="oc" id="oc">
        <option>select</option>
        <option value=<?php if(sizeof($course_oc)>0) echo $course_oc[0]; else echo " ";?>><?php if(sizeof($course_oc)>0) echo $course_oc[0]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>1) echo $course_oc[1]; else echo " ";?>><?php if(sizeof($course_oc)>1) echo $course_oc[1]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>2) echo $course_oc[2]; else echo " ";?>><?php if(sizeof($course_oc)>2) echo $course_oc[2]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>3) echo $course_oc[3]; else echo " ";?>><?php if(sizeof($course_oc)>3) echo $course_oc[3]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>4) echo $course_oc[4]; else echo " ";?>><?php if(sizeof($course_oc)>4) echo $course_oc[4]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>5) echo $course_oc[5]; else echo " ";?>><?php if(sizeof($course_oc)>5) echo $course_oc[5]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>6) echo $course_oc[6]; else echo " ";?>><?php if(sizeof($course_oc)>6) echo $course_oc[6]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>7) echo $course_oc[7]; else echo " ";?>><?php if(sizeof($course_oc)>7) echo $course_oc[7]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>8) echo $course_oc[8]; else echo " ";?>><?php if(sizeof($course_oc)>8) echo $course_oc[8]; else echo " ";?></option>
        <option value=<?php if(sizeof($course_oc)>9) echo $course_oc[9]; else echo " ";?>><?php if(sizeof($course_oc)>9) echo $course_oc[9]; else echo " ";?></option>
      </select>
       <input type="submit" name="ADD" id="ADD" value="ADD" />
       <br />
      </label>
    </div>
  </form>
  <form id="form3" name="form3" method="post" action="delete.php">
    <label>

    <div align="center"><strong>Delete Courses</strong><br />
      <select name="del" id="del">
        <option>select</option>
        <?php
        if(isset($_GET['array']))
  		{
			$array = unserialize($_GET['array']);
			$flag=1;
		}
		else $flag = 0;
			
	 	?>
        <option value=<?php if($flag) {if(sizeof($array)>0) echo $array[0]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>0) echo $array[0]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>1) echo $array[1]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>1) echo $array[1]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>2) echo $array[2]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>2) echo $array[2]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>3) echo $array[3]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>3) echo $array[3]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>4) echo $array[4]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>4) echo $array[4]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>5) echo $array[5]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>5) echo $array[5]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>6) echo $array[6]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>6) echo $array[6]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>7) echo $array[7]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>7) echo $array[7]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>8) echo $array[8]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>8) echo $array[8]; else echo " ";} else echo " "; ?></option>
       <option value=<?php if($flag) {if(sizeof($array)>9) echo $array[9]; else echo " ";} else echo " "; ?>><?php if($flag) {if(sizeof($array)>9) echo $array[9]; else echo " ";} else echo " "; ?></option>
      </select>
       <input type="submit" name="DELETE" id="DELETE" value="DELETE" />
       <br />
      </label>
    </div>
  </form>
  
  <p align="center">&nbsp;</p>
  <p align="center"><strong><span class="style2">--You have applied for following courses-</span></strong><span class="style2">-</span></p>
  <p align="center"><span class="style2">
  <?php 
  //$course1 = $_POST["DC"];
  //echo $course1;
  if(isset($_GET['array']))
  {
  	$course_reg = unserialize($_GET['array']);
	for($i=0;$i<sizeof($course_reg);$i++)
	{
		if($course_reg[$i]!="NULL") echo $course_reg[$i]." ";
	}
	//echo "##CSL101"; 
   }
   
 /* if(isset($_GET['course_reg_oc']))
  {
  	$course_reg_oc = unserialize($_GET['course_reg_oc']);
	for($i=0;$i<sizeof($course_reg_oc);$i++)
	{
		echo $course_reg_oc[$i]." ";
	}
	//echo "CSL101"; 
   }*/
  ?> 
  </span></p>
  <p align="center">&nbsp;</p>
</div>
<div align="center">
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button1','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#A5ADB5','movie','button1' ); //end AC code
</script><noscript>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
  <param name="BGCOLOR" value="#A5ADB5" />
  <param name="movie" value="button1.swf" />
  <param name="quality" value="high" />
  <embed src="button1.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#A5ADB5" ></embed>
</object>
</noscript>
</div>
</body>



</html>
