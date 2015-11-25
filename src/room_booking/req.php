<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$req[30]=$_POST["pswd"];
$req[15]="ind";
$req[0]=$_POST["dd"];
$req[1]=$_POST["mm"];
$req[2]=$_POST["yy"];
$req[3]='I';
$req[4]=$_POST["cap"];
$req[5]=$_POST["select1"];
$req[6]=$_POST["select2"];
$k=16;
for($i=9;$i<$_POST["select1"];$i++)
{
	$req[$k]=0;
	$k++;
}
for($i=$_POST["select1"];$i<$_POST["select2"];$i++)
{
	$req[$k]=1;
	$k++;
}
for($i=$_POST["select2"];$i<=17;$i++)
{
	$req[$k]=0;
	$k++;
}


if(isset($_POST["wb"]))
{
	$req[7]=1;
}
else
{
	$req[7]=0;
}
if(isset($_POST["lcd"]))
{
	$req[8]=1;
}
else
{
	$req[8]=0;
}
if(isset($_POST["ac"]))
{
	$req[9]=1;
}
else
{
	$req[9]=0;
}
if(isset($_POST["pr"]))
{
	$req[10]=1;
}
else
{
	$req[10]=0;
}
if(isset($_POST["au"]))
{
	$req[11]=1;
}
else
{
	$req[11]=0;
}
if(isset($_POST["ss"]))
{
	$req[12]=1;
}
else
{
	$req[12]=0;
}
if(isset($_POST["ar"]))
{
	$req[13]=1;
}
else
{
	$req[13]=0;
}
if(isset($_POST["vr"]))
{
	$req[14]=1;
}
else
{
	$req[14]=0;
}

for($i=0;$i<=23;$i++)
{
	//echo $req[$i];
}

if(!(ctype_digit($req[4])))
{
	header("Location: main3.php");
	exit();
}
if( $req[5]>=$req[6])
{
	header("Location: main4.php");
	exit();
}
$app= $req[2].'-'.$req[1].'-'.$req[0];

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);
// Execute query
mysql_query("INSERT INTO `id`(`uni_id`)
SELECT MAX(`uni_id`)+11 AS `id1` FROM `id`");
$result= mysql_query("SELECT MAX(`uni_id`) as id1 FROM `id`"); 
echo '<br/>';
while($row = mysql_fetch_array($result))
{
$id=$row['id1'];
echo "<br />";

}
mysql_query("UPDATE `id` SET `date`='$app',`day`='P',`capacity`='$req[4]',`status`='0',`wb`='$req[7]',`lcd`='$req[8]',`ac`='$req[9]',`pr`='$req[10]',`a`='$req[11]',`s`='$req[12]',`ar`='$req[13]',`v`='$req[14]',`t9`='$req[16]',`t10`='$req[17]',`t11`='$req[18]',`t12`='$req[19]',`t13`='$req[20]',`t14`='$req[21]',`t15`='$req[22]',`t16`='$req[23]',`password`='$req[30]' WHERE `uni_id`='$id'");

$oid=$id;
$uid='123'.'_'.$id;
$room_no=0;
$room_no1=0;
$msg=$id;
$req[28]=$msg;
$id=$uid;
echo $app;

/*

printf("1\n");
$num=mysql_query("SELECT `number` FROM `request` 
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `capacity`>='$req[4]' AND `wb`>= '$req[7]' AND `lcd`>= '$req[8]' AND `ac`>='$req[9]' AND `pr`>= '$req[10]' AND `a`>= '$req[11]' AND `s`>='$req[12]' AND `ar`>= '$req[13]' AND `v`>='$req[14]' AND (NOT($req[16] AND `t9`) AND NOT($req[17] AND `t10`) AND NOT($req[18] AND `t11`) AND  NOT($req[19] AND `t12`) AND NOT($req[20] AND `t13`) AND NOT($req[21] AND `t14`) AND NOT($req[22] AND `t15`) AND NOT($req[23] AND `t16`)))
ORDER BY `number` ASC  
LIMIT 1");
while($row=mysql_fetch_array($num))
{
$room_no1= $row['number'];
echo $room_no1;
}
mysql_query("UPDATE `request` SET `t9`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[16]'='1')
ORDER BY `capacity` ASC 
LIMIT 1
");
printf("2\n");
mysql_query("UPDATE `request` SET `t10`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[17]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("3\n");
mysql_query("UPDATE `request` SET `t11`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[18]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("4\n");
mysql_query("UPDATE `request` SET `t12`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[19]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("5\n");
mysql_query("UPDATE `request` SET `t13`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[20]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("6\n");
mysql_query("UPDATE `request` SET `t14`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[21]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("7\n");
mysql_query("UPDATE `request` SET `t15`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[22]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("8\n");
mysql_query("UPDATE `request` SET `t16`='$id'
WHERE (`DAY`='$req[3]' AND `date`= '$app' AND `number`='$room_no1' AND '$req[23]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
/*$roomno=mysql_query("SELECT  `number` FROM `request` WHERE (`t16`='$id' OR `t15`='$id' OR `t14`='$id' OR `t13`='$id' OR `t12`='$id' OR `t11`='$id' OR `t10`='$id' OR `t9`='$id')");
echo $roomno;
while($row=mysql_fetch_array($roomno))
{
$room_no= $row['number'];*//*
echo $room_no1;
//}

if($room_no1==0)
{

	header("Location: booked2.php?msg1=".$id);
}
else
{
mysql_query("UPDATE `id` SET `status`='1' WHERE `uni_id`='$oid'
LIMIT 1");
mysql_query("UPDATE `id` SET `room`='$room_no1' WHERE `uni_id`='$oid'
LIMIT 1");
header("Location: booked.php?msg1=".$id."&msg2=".$room_no1);
}
*/
header("Location: booked3.php?msg1=".$id."&pswd=".$req[30]);

?>
</body>
</html>
