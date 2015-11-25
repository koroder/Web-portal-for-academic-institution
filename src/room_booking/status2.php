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
-->
</style>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style6 {font-size: 24px; color: #000033; }
.style7 {font-size: 24px; color: #000066; }
.style8 {
	font-size: xx-large;
	color: #000033;
}
.style10 {font-size: x-large; color: #000066; }
-->
</style>
</head>
<body>
<div align="center">
  <p class="style8">REQUEST INFORMATION  </p>
  <p><strong>YOUR REQUEST </strong>: <span class="style6">
    <?php
  echo $_GET["msg"];
  ?>
  </span></p>
  <p><strong>DATE FOR WHICH ROOM IS ALLOTED IS</strong> : <span class="style10">
    <?php
  echo $_GET["date"];
  ?>
  </span></p>
  <p>
  <strong>ROOM ALLOTED TO YOU </strong>: <span class="selectRequiredState style7">
  <?php
  echo "ROOM NUMBER IS ";
  echo $_GET["room"];
  ?>
  </span></p>
  <p class="selectRequiredState style7">&nbsp;</p>
  <p>
    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button33','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#848473','movie','button33' ); //end AC code
    </script>
    <noscript>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
      <param name="movie" value="button33.swf" />
      <param name="quality" value="high" /><param name="BGCOLOR" value="#848473" />
      <embed src="button33.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#848473" ></embed>
    </object>
    </noscript>
  </p>
  <p>&nbsp;</p>
</div>
</body>
</html>
