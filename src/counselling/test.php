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
else
{ printf("Well connected \n");}

mysql_select_db("test", $con);
// Execute query
$min=mysql_query(" SELECT MIN(`rank`) AS `rank1` FROM `sign_up`");
while($temp= mysql_fetch_array($min))
{
$min_rank=$temp['rank1'];
}
echo $min_rank;
$choi= mysql_query(" SELECT `userid`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `choice6`, `choice7`, `choice8`, `choice9`, `choice10` FROM `sign_up` WHERE (`rank`='$min_rank') ");

while($temp = mysql_fetch_array($choi)){
$id=$temp['userid'];
$choice[1]=$temp['choice1'];
$choice[2]=$temp['choice2'];
$choice[3]=$temp['choice3'];
$choice[4]=$temp['choice4'];
$choice[5]=$temp['choice5'];
$choice[6]=$temp['choice6'];
$choice[7]=$temp['choice7'];
$choice[8]=$temp['choice8'];
$choice[9]=$temp['choice9'];
$choice[10]=$temp['choice10'];
}
echo '</br>';
echo $choice[7];
$choice[0]=$min_rank;

?>
</body>
</html>
