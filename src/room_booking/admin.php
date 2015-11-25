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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {
	font-size: xx-large;
	color: #000033;
}
-->
</style>
</head>

<body>
<div align="center">
  <p class="style3">ADMIN LOGIN</p>
  <form id="form1" name="form1" method="post" action="adminlogin.php">
    <p><strong>ADMIN ID</strong> <span id="sprytextfield1">
      <label for="ID"></label>
      <input type="text" name="ID" id="ID" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
    <p><strong>PASSWORD</strong>      <span id="sprytextfield2">
        <label for="pswd"></label>
        <input type="password" name="pswd" id="pswd" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
    <p>
      <label for="SUBMIT"></label>
      <input type="submit" name="SUBMIT" id="SUBMIT" value="Submit" />
    </p>
  </form>
  
  <p>
    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button24','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button24' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
      <param name="movie" value="button24.swf" />
      <param name="quality" value="high" />
      <embed src="button24.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="20" ></embed>
    </object></noscript>
  </p>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
