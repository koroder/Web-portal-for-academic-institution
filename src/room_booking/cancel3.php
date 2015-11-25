<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_POST["id"];
$pswd=$_POST["pswd"];
$pieces = explode("_", $id);
$uni='222';
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
$pc=$pieces[1];
mysql_select_db("test", $con);
$result= mysql_query("SELECT `password` as id1 FROM `id` WHERE `uni_id`='$pc'"); 
echo $pc;
echo '<br/>';
while($row = mysql_fetch_array($result))
{
$uni=$row['id1'];
echo "<br />";
echo $uni;
}

if($uni!='222' and $uni==$pswd)
{
mysql_query("UPDATE `request` SET  `t9`='0' WHERE (`t9`='$id')");
mysql_query("UPDATE `request` SET  `t10`='0' WHERE (`t10`='$id')");
mysql_query("UPDATE `request` SET  `t11`='0' WHERE (`t11`='$id')");
mysql_query("UPDATE `request` SET  `t12`='0' WHERE (`t12`='$id')");
mysql_query("UPDATE `request` SET  `t13`='0' WHERE (`t13`='$id')");
mysql_query("UPDATE `request` SET  `t14`='0' WHERE (`t14`='$id')");
mysql_query("UPDATE `request` SET  `t15`='0' WHERE (`t15`='$id')");
mysql_query("UPDATE `request` SET  `t16`='0' WHERE (`t16`='$id')");

mysql_query("UPDATE `id` SET `status`='2' WHERE `uni_id`='$pieces[1]'
LIMIT 1");

$result=mysql_query("SELECT MAX(`uni_id`)+11 AS `id1` FROM `id`");
while($row=mysql_fetch_array($result))
{
$res= $row['id1'];
echo $res;
$status=$res;
}

header("Location: cancel2.php?msg=".$id);
}
else
{
header("Location: cancel4.php");
}

?>
</body>
</html>
