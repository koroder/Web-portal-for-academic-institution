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
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {
	font-size: xx-large;
	color: #000066;
}
-->
</style>
</head>

<body>
<p align="center" class="style3">PLEASE ENTER THE DETAILS</p>
<form id="form1" name="form1" method="post" action="req2.php">
<span id="spryselect2"><span class="selectRequiredMsg">Please select an item.</span></span> <span id="spryselect5">
  <label for="dy"></label>
</span><span id="spryselect3"><span class="selectRequiredMsg">Please select an item.</span></span>
  <p>DAY<span id="sprytextfield2">
    <label for="dy"></label>
    <span class="textfieldRequiredMsg">A value is required.</span></span><span id="sprycheckbox1">
    <label for="dy"></label>
    <span class="checkboxRequiredMsg">Please make a selection.</span></span><span id="spryselect1">
    <label for="dy"></label>
    <select name="dy" size="1" id="dy">
      <option value="M">M</option>
      <option value="T">T</option>
      <option value="W">W</option>
      <option value="Th">Th</option>
      <option value="F">F</option>
            </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></p>
  <p><span id="sprytextfield1">
    <label for="cap">CAPACITY</label>
    <input name="cap" type="text" id="cap" maxlength="3" />
    <span class="textfieldRequiredMsg">A value is required.</span></span></p>
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
    <span class="selectRequiredMsg">Please select an item.</span></span></p>
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
  <p align="center">&nbsp;</p>
  <p align="center">
    <label for="button"></label>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
  <p align="center">&nbsp;</p>
</form>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
//-->
</script>
</body>
</html>
