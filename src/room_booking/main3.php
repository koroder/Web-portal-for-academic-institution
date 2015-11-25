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
<style type="text/css">
<!--
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
	color: #FFFF00;
}
.style4 {	color: #CC0033;
	font-style: italic;
}
-->
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {
	font-size: xx-large;
	color: #000033;
}
.style6 {color: #FFFF00}
-->
</style>
</head>


<body>
<p align="center" class="style5">PLEASE ENTER THE DETAILS</p>
<form id="form1" name="form1" method="post" action="req.php">
  DATE<span id="spryselect1">
  <label for="select1"></label>
  <select name="dd" size="1" id="dd">
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    <option value="05">5</option>
    <option value="06">6</option>
    <option value="07">7</option>
    <option value="08">8</option>
    <option value="09">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
  </select>
  <span class="selectRequiredMsg">Please select an item.</span></span>
  <span id="spryselect2">
  <label for="mm">MONTH</label>
  <select name="mm" size="1" id="mm">
    <option value="01">1</option>
    <option value="02">2</option>
    <option value="03">3</option>
    <option value="04">4</option>
    <option value="05">5</option>
    <option value="06">6</option>
    <option value="07">7</option>
    <option value="08">8</option>
    <option value="09">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
  <span class="selectRequiredMsg">Please select an item.</span></span>
  <span id="spryselect5">
  <label for="day"> </label>
  <span class="selectRequiredMsg">Please select an item.</span></span><span id="spryselect3">
  <label for="yy">YEAR</label>
  <select name="yy" size="1" id="yy">
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
  </select>
  <span class="selectRequiredMsg">Please select an item.</span></span>
  <p><span id="sprytextfield1">
    <label for="text1">CAPACITY</label>
    <input name="cap" type="text" id="cap" maxlength="3" />
  </span> <span class="style3">capacity should be an integer</span></p>
  <p><span id="spryselect4">
    <label for="select1">Starting time</label>
    <select name="select1" size="1" id="select1">
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">1</option>
      <option value="14">2</option>
      <option value="15">3</option>
      <option value="16">4</option>
      <option value="17">5</option>
    </select>
  <span class="selectRequiredMsg">Please select an item.</span></span> <span id="spryselect6">
  <label for="select2">End time</label>
  <select name="select2" size="1" id="select2">
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">1</option>
    <option value="14">2</option>
    <option value="15">3</option>
    <option value="16">4</option>
    <option value="17">5</option>
  </select>
  <span class="selectRequiredMsg">Please select an it</span></span></p>
  <p align="center"><strong>CHOOSE THE RESOURCES:</strong></p>
  <p align="center">
    <input name="wb" type="checkbox" id="wb" value="1" />
    <label for="wb">Whiteboard</label>
  </p>
  <p align="center">
    <input name="lcd" type="checkbox" id="lcd" value="1" />
    <label for="lcd">LCD</label>
  </p>
  <p align="center">
    <input name="ac" type="checkbox" id="ac" value="1" />
    <label for="ac">Airconditioning</label>
</p>
  <p align="center">
    <input name="pr" type="checkbox" id="pr" value="1" />
    <label for="pr">Projector</label>
  </p>
  <p align="center">
    <input name="au" type="checkbox" id="au" value="1" />
    <label for="au"></label>
  Audio Facility</p>
  <p align="center">
    <input name="ss" type="checkbox" id="ss" value="1" />
    <label for="ss">Sound System</label>
  </p>
  <p align="center">
    <input name="ar" type="checkbox" id="ar" value="1" />
    <label for="ar">Audio recording facility</label>
  </p>
  <p align="center">
    <input name="vr" type="checkbox" id="vr" />
    <label for="vr">Video recording facility</label>
  </p>
  <p align="center"><span class="style4"><span class="style6">six character password for this request</span>
    <label for="pswd"></label>
      <input name="pswd" type="password" id="pswd" maxlength="6" />
  </span><span id="sprytextfield2"> <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p align="center">
    <label for="button"></label>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<div align="center">
  <p>
    <script type="text/javascript">
<!--
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
//-->
  </script>
    
    <?php 

  ?>
</p>
  <p>
    <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','20','src','button36','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button36' ); //end AC code
    </script>
    <noscript>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="20">
      <param name="movie" value="button36.swf" />
      <param name="quality" value="high" />
      <embed src="button36.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="20" ></embed>
    </object>
    </noscript>
</p>
</div>
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
</body>
</html>
