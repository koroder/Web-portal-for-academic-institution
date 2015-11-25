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
{
printf("Well connected");
}
mysql_select_db("ratan", $con);

$result=mysql_query("SELECT `course`FROM `list`");
$result2=mysql_query("SELECT `cap`FROM `list`");
$i=0;
while($row = mysql_fetch_array($result))
{
echo $row['course'];
$course[$i]=$row['course']; $i++;
echo "<br />";
}
$j=0;
while($row2 = mysql_fetch_array($result2))
{
echo $row2['cap'];
$cap[$j]=$row2['cap'];$j++;
echo "<br />";
}
echo $i; echo $course[1];
echo $j; echo $cap[1];
for($k=0;$k<$i;$k++)
{
// Execute query
mysql_query("
INSERT INTO `reg`(`user`) (SELECT `user_id` 
FROM `courses`
WHERE (`course_1`='$course[$k]' OR `course_2`='$course[$k]' OR `course_3`='$course[$k]' OR `course_4`='$course[$k]' OR `course_5`='$course[$k]' OR `course_6`='$course[$k]' OR `course_7`='$course[$k]' OR `course_8`='$course[$k]')
ORDER BY `cgpa` DESC
LIMIT $cap[$k]) ");
mysql_query(" UPDATE `reg` SET `course`='$course[$k]' WHERE `course`='NULL' ");
}

//////// for checking status ///////////////
header( "Location: allot_success.html");

?>
</body>
</html>
