<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("test", $con);
// Execute query

$result= mysql_query("SELECT MAX(`uni_id`) as id1 FROM `id`"); 
echo '<br/>';
while($row = mysql_fetch_array($result))
{
$maxid=$row['id1'];
echo "<br />";
}

for($i=711;$i<=$maxid;$i=$i+11)
{
	//select everything in an array from id into req and app and status=2 (not yet accepted)
	
		$result=mysql_query("SELECT `date` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res=$row['date'];
		echo "<br />";
		$app=$res;
		}
		$result=mysql_query("SELECT `capacity` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['capacity'];
		$req[4]=$res;
		}
		$result=mysql_query("SELECT `wb` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['wb'];
		$req[7]=$res;
		}
		$result=mysql_query("SELECT `lcd` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['lcd'];
		$req[8]=$res;
		}
		$result=mysql_query("SELECT `ac` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['ac'];
		$req[9]=$res;
		}
		$result=mysql_query("SELECT `pr` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['pr'];
		$req[10]=$res;
		}
		$result=mysql_query("SELECT `a` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['a'];
		$req[11]=$res;
		}
		$result=mysql_query("SELECT `s` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['s'];
		$req[12]=$res;
		}
		$result=mysql_query("SELECT `ar` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['ar'];
		$req[13]=$res;
		}
		$result=mysql_query("SELECT `v` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['v'];
		$req[14]=$res;
		}
		$result=mysql_query("SELECT `t9` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t9'];
		$req[16]=$res;
		}
		$result=mysql_query("SELECT `t10` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t10'];
		$req[17]=$res;
		}
		$result=mysql_query("SELECT `t11` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t11'];
		$req[18]=$res;
		}
		$result=mysql_query("SELECT `t12` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t12'];
		$req[19]=$res;
		}
		$result=mysql_query("SELECT `t13` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t13'];
		$req[20]=$res;
		}
		$result=mysql_query("SELECT `t14` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t14'];
		$req[21]=$res;
		}
		$result=mysql_query("SELECT `t15` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t15'];
		$req[22]=$res;
		}
		$result=mysql_query("SELECT `t16` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['t16'];
		$req[23]=$res;
		}
		$result=mysql_query("SELECT `status` FROM `id` WHERE (`uni_id`='$i' AND `status`='0') ");
		while($row=mysql_fetch_array($result))
		{
		$res= $row['status'];
		$status=$res;
		}

	$id='123'.'_'.$i;
	
$todays_date = date("Y-m-d");
$pieces = explode("-", $todays_date);
$pieces1 = explode("-", $app);
if($pieces[0]>$pieces1[0])
{
mysql_query("UPDATE `id` SET `status`='2' WHERE `uni_id`='$i'
LIMIT 1");
}
else if(($pieces[0]==$pieces1[0]) and ($pieces[1]>$pieces1[1]))
{
mysql_query("UPDATE `id` SET `status`='2' WHERE `uni_id`='$i'
LIMIT 1");
}
else if(($pieces[0]==$pieces1[0]) and ($pieces[1]==$pieces1[1]) and ($pieces[2]>$pieces1[2]))
{
mysql_query("UPDATE `id` SET `status`='2' WHERE `uni_id`='$i'
LIMIT 1");
}
else{
	
	
	
	
	
	printf("1\n");
	$room_no1='0';
	$num=mysql_query("SELECT `number` FROM `request` 
	WHERE (`date`= '$app' AND `capacity`>='$req[4]' AND `wb`>= '$req[7]' AND `lcd`>= '$req[8]' AND `ac`>='$req[9]' AND `pr`>= '$req[10]' AND `a`>= '$req[11]' AND `s`>='$req[12]' AND `ar`>= '$req[13]' AND `v`>='$req[14]' AND (NOT($req[16] AND `t9`) AND NOT($req[17] AND `t10`) AND NOT($req[18] AND `t11`) AND  NOT($req[19] AND `t12`) AND NOT($req[20] AND `t13`) AND NOT($req[21] AND `t14`) AND NOT($req[22] AND `t15`) AND NOT($req[23] AND `t16`)))
	ORDER BY `number` ASC  
	LIMIT 1");
	while($row=mysql_fetch_array($num))
	{
	$room_no1= $row['number'];
	
	}printf("abcd\n");echo $room_no1;printf("abcd\n");
if($room_no1!='0')
{
mysql_query("UPDATE `request` SET `t9`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[16]'='1')
ORDER BY `capacity` ASC 
LIMIT 1
");
printf("2\n");
mysql_query("UPDATE `request` SET `t10`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[17]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("3\n");
mysql_query("UPDATE `request` SET `t11`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[18]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("4\n");
mysql_query("UPDATE `request` SET `t12`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[19]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("5\n");
mysql_query("UPDATE `request` SET `t13`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[20]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("6\n");
mysql_query("UPDATE `request` SET `t14`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[21]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("7\n");
mysql_query("UPDATE `request` SET `t15`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[22]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");
printf("8\n");
mysql_query("UPDATE `request` SET `t16`='$id'
WHERE (`date`= '$app' AND `number`='$room_no1' AND '$req[23]'='1')
ORDER BY `capacity` ASC 
LIMIT 1");

echo $room_no1;
mysql_query("UPDATE `id` SET `status`='1' WHERE `uni_id`='$i'
LIMIT 1");
mysql_query("UPDATE `id` SET `room`='$room_no1' WHERE `uni_id`='$i'
LIMIT 1");
}
}
}


header("Location: admin_page.php");

?>
</body>
</html>
