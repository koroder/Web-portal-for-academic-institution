<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$id1=$_POST["id"];
$pswd=$_POST["pswd"];
$room='0';
$RESULT='0';
$msg1="CONGRATULATION YOUR REQUEST IS APPROVED";
$msg2="YOUR REQUEST IS UNDER CONSIDERATION";
//DB check if it is in there?
//if there find room number

$pieces = explode("_", $id1);
$id=$pieces[1];
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
else
{ printf("Well Connected \n");}
mysql_select_db("test", $con);
// Execute query
echo $id;
echo $pswd;
$result=mysql_query("SELECT `status` FROM `id` WHERE `uni_id`='$id' AND `password`='$pswd' LIMIT 1 ");
while($row=mysql_fetch_array($result))
{
$res= $row['status'];
echo $res;
$status=$res;
echo $status;
}
if($status=='2')
{
header("Location: status44.php");
}
else if($status=='1')
{

$result=mysql_query("SELECT `room` FROM `id` WHERE `uni_id`='$pieces[1]' LIMIT 1 ");
while($row=mysql_fetch_array($result))
{
$res= $row['room'];
echo $res;
$room=$res;
echo $room;
}
$result=mysql_query("SELECT `date` FROM `id` WHERE `uni_id`='$pieces[1]' LIMIT 1 ");
while($row=mysql_fetch_array($result))
{
$res= $row['date'];
echo $res;
$date=$res;
echo $room;
}
header("Location: status2.php?msg=".$id1."&room=".$room."&date=".$date);
}
else if($status=='0')
{
header("Location: status5.php");
}
else
{
	header("Location: status4.php");
}

exit(1);
?>
</body>
</html>
