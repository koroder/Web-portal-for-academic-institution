<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$log[0]=$_POST["ID"];
$log[1]=$_POST["pswd"];

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);
// Execute query
$temp0=$log[0];
$temp1=$log[1];
$pass='arbitary';
$result= mysql_query("SELECT `password` as id1 FROM `admin` WHERE `id`='$temp0'"); 
echo '<br/>';
while($row = mysql_fetch_array($result))
{
$pass=$row['id1'];
echo "<br />";
echo $pass;
}
echo $pass;
if($log[1]==$pass) {
header("Location: admin_page.php"); 
}
else 
{
header("Location: admin.php");
}


?>
</body>
</html>
