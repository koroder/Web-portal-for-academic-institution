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
.style1 {
	font-size: xx-large;
	font-weight: bold;
	color: #000033;
}
-->
</style>
</head>

<body>
<div align="center">
  <p><span id="sprytextfield1"><span class="textfieldRequiredMsg">value is required.</span></span> <span class="style1">TO CHECK STATUS</span></p>
  <form id="form1" name="form1" method="post" action="status3.php">
    <p>
    <label for="button"></label>
    <strong>REQUEST ID 
    <label for="id"></label>
      </strong><span id="sprytextfield2">
  <input type="text" name="id" id="id" />
  <span class="textfieldRequiredMsg">A value is required.</span></span></p>
    <p><strong>PASSWORD 
        <label for="pswd"></label>
        <input name="pswd" type="password" id="pswd" maxlength="6" />
    </strong><span id="sprytextfield3">    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
    <p>
      <input type="submit" name="button" id="button" value="Submit" />
</p>
  </form>
  <p>
    <label for="button"></label>
    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button34','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#999999','movie','button34' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
      <param name="movie" value="button34.swf" />
      <param name="quality" value="high" /><param name="BGCOLOR" value="#999999" />
      <embed src="button34.swf" width="100" height="20" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#999999" ></embed>
    </object></noscript>
  </p>
</div>
<div align="center"></div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
//-->
</script>
</body>
</html>
