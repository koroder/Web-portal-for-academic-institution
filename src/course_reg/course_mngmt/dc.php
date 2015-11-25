<html>
<body>
<?php
$user = $_COOKIE["user"];
$course = $_POST['dc'];

//$user='cs5100280';
//$course='CSL374';
//give in the query here to update db for DC
//$course_reg[0]="CSL101";
//$course_reg[1]="CSL201";
//$course_reg[2]="CSP315";
//$course_reg[3]="HUL287";
//$course_reg[4]="SML301";

$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("ratan", $con);
// Execute query
$res=mysql_query("SELECT `index` FROM `courses` WHERE `user_id`='$user'");
//echo $result;
while($row = mysql_fetch_array($res))
{
echo $row['index'];
$index=$row['index'];
printf(" In index ="); echo $index;
echo "<br />";
}

if($index == '0')
{
//printf("\n In index");
//printf(" \n Course value and user== ");
//echo $course; echo $user;
$a0=mysql_query(" UPDATE `courses` SET `course_1`='$course',`index`='1' WHERE `user_id`='$user' ");
$b0=mysql_query(" SELECT  `course_1` FROM `courses` WHERE `user_id`='$user' ");
//$a1=mysql_query(" UPDATE `courses` SET `course_1`='HUL100',`index`='1' WHERE `user_id`='$user' ");
//$b1=mysql_query(" SELECT  `course_1` FROM `courses` WHERE `user_id`='$user' ");

	while($row0 = mysql_fetch_array($b0))
	{
	echo $row0['course_1'];
	$array[0]=$row0['course_1'];
	echo "<br />";
	}

}
else if($index== '1')
 {
 $a1=mysql_query(" UPDATE `courses` SET `course_2`='$course',`index`='2' WHERE `user_id`='$user' ");
 $b1=mysql_query(" SELECT  `course_1`,`course_2` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row1 = mysql_fetch_array($b1))
		{
		echo $row1['course_2'];
		$array[0]=$row1['course_1'];
		$array[1]=$row1['course_2'];
		echo "<br />";
		}
 }
 else if($index== '2')
 {
 $a2=mysql_query(" UPDATE `courses` SET `course_3`='$course',`index`='3' WHERE `user_id`='$user' ");
 $b2=mysql_query(" SELECT  `course_1`,`course_2`,`course_3` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row2 = mysql_fetch_array($b2))
		{
		echo $row2['course_3'];
		$array[0]=$row2['course_1'];
		$array[1]=$row2['course_2'];
		$array[2]=$row2['course_3'];
		echo "<br />";
		}
 }
 else if($index== '3')
 {
 $a3=mysql_query(" UPDATE `courses` SET `course_4`='$course',`index`='4' WHERE `user_id`='$user' ");
 $b3=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row3 = mysql_fetch_array($b3))
		{
		echo $row3['course_4'];
		$array[0]=$row3['course_1'];
		$array[1]=$row3['course_2'];
		$array[2]=$row3['course_3'];
		$array[3]=$row3['course_4'];
		echo "<br />";
		}
 }
 else if($index== '4')
 {
 $a4=mysql_query(" UPDATE `courses` SET `course_5`='$course',`index`='5' WHERE `user_id`='$user' ");
 $b4=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row4 = mysql_fetch_array($b4))
		{
		echo $row4['course_5'];
		$array[0]=$row4['course_1'];
		$array[1]=$row4['course_2'];
		$array[2]=$row4['course_3'];
		$array[3]=$row4['course_4'];
		$array[4]=$row4['course_5'];
		echo "<br />";
		}
 }
 
 else if($index== '5')
 {
 $a5=mysql_query(" UPDATE `courses` SET `course_6`='$course',`index`='6' WHERE `user_id`='$user' ");
 $b5=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5`,`course_6` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row5 = mysql_fetch_array($b5))
		{
		echo $row5['course_6'];
		$array[0]=$row5['course_1'];
		$array[1]=$row5['course_2'];
		$array[2]=$row5['course_3'];
		$array[3]=$row5['course_4'];
		$array[4]=$row5['course_5'];
		$array[5]=$row5['course_6'];
		echo "<br />";
		}
 }

 else if($index== '6')
 {
 $a6=mysql_query(" UPDATE `courses` SET `course_7`='$course',`index`='7' WHERE `user_id`='$user' ");
 $b6=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5`,`course_6`,`course_7` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row6 = mysql_fetch_array($b6))
		{
		echo $row6['course_7'];
		$array[0]=$row6['course_1'];
		$array[1]=$row6['course_2'];
		$array[2]=$row6['course_3'];
		$array[3]=$row6['course_4'];
		$array[4]=$row6['course_5'];
		$array[5]=$row6['course_6'];
		$array[6]=$row6['course_7'];
		echo "<br />";
		}
 }
  else if($index== '7')
 {
 $a7=mysql_query(" UPDATE `courses` SET `course_8`='$course',`index`='8' WHERE `user_id`='$user' ");
 $b7=mysql_query(" SELECT  SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5`,`course_6`,`course_7`,`course_8` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row7 = mysql_fetch_array($b7))
		{
		echo $row7['course_8'];		
		$array[0]=$row7['course_1'];
		$array[1]=$row7['course_2'];
		$array[2]=$row7['course_3'];
		$array[3]=$row7['course_4'];
		$array[4]=$row7['course_5'];
		$array[5]=$row7['course_6'];
		$array[6]=$row7['course_7'];
		$array[7]=$row7['course_8'];
		echo "<br />";
		}
 }
   else if($index== '8')
 {
 printf(" \n All course slots are full \n");
 }
printf(" \n FINAL VALUE \n");

for($j=0; $j<$index+1; $j++)
{
echo $array[$j];
echo "<br />";
}

//store all courses of user in $course_reg array
header( "Location: course_reg.php?array=".serialize($array));
exit(1);

?>
</body>
</html>