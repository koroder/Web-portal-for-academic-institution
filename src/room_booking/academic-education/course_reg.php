<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(images/bg_16.gif);
}
.style1 {
	font-size: xx-large;
	color: #000000;
}
.style2 {font-size: medium}
-->
</style>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

<div align="center" class="style1">
  <p align="center"><strong>WELCOME TO COURSE REGISTRATION</strong></p>
  <p align="center">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="dc.php">
    <label>
    <div align="center">Departmental Courses<br />
      <select name="dc" id="dc">
        <option>select</option>
        <option value="CSL101">CSL101</option>
        <option value="CSL102">CSL102</option>
        <option value="CSL201">CSL201</option>
        <option value="CSP301">CSP301</option>
        <option value="CSP315">CSP315</option>
      </select>
       <input type="submit" name="ADD" id="ADD" value="ADD" />
       <br />
      </label>
    </div>
  </form>
  <form id="form2" name="form2" method="post" action="oc.php">
    <label>
    <div align="center">Open Category Courses<br />
      <select name="dc" id="dc">
        <option>select</option>
        <option value="HUL263">HUL263</option>
        <option value="CEL120">CEL120</option>
        <option value="MAL250">MAL250</option>
        <option value="SML701">SML701</option>
        <option value="RDL231">RDL231</option>
      </select>
       <input type="submit" name="ADD" id="ADD" value="ADD" />
       <br />
      </label>
    </div>
  </form>
  <form id="form3" name="form3" method="post" action="delete.php">
    <label>
    <div align="center">Delete Courses<br />
      <select name="dc" id="dc">
        <option>select</option>
        <option value="CSL101">CSL101</option>
        <option value="CSL102">CSL102</option>
        <option value="CSL201">CSL201</option>
        <option value="CSP301">CSP301</option>
        <option value="CSP315">CSP315</option>
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
  if(isset($_GET['course_reg']))
  {
  	$course_reg = unserialize($_GET['course_reg']);
	for($i=0;$i<sizeof($course_reg);$i++)
	{
		echo $course_reg[$i]." ";
	}
	//echo "CSL101"; 
   }
   
  if(isset($_GET['course_reg_oc']))
  {
  	$course_reg_oc = unserialize($_GET['course_reg_oc']);
	for($i=0;$i<sizeof($course_reg_oc);$i++)
	{
		echo $course_reg_oc[$i]." ";
	}
	//echo "CSL101"; 
   }
  ?> 
  </span></p>
  <p align="center">&nbsp;</p>
</div>
<div align="center"></div>
</body>



</html>
