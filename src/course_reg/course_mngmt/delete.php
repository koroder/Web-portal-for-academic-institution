<html>
<body>
<?php
$user = $_COOKIE["user"];
$course = $_POST["del"];
//give in the query here to update db of OC
//$course_reg_oc[0]="CSL101";
//$course_reg_oc[1]="CSL201";
//$course_reg_oc[2]="CSP315";
//$course_reg_oc[3]="HUL287";
//$course_reg_oc[4]="check301";

//$user='cs1100236';
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

/*$a0=mysql_query(" UPDATE `courses` SET `course_1`='$course',`index`='1' WHERE `user_id`='$user' ");
$b0=mysql_query(" SELECT  `course_1` FROM `courses` WHERE `user_id`='$user' ");

	while($row0 = mysql_fetch_array($b0))
	{
	echo $row0['course_1'];
	$array[0]=$row0['course_1'];
	echo "<br />";
	}
*/

printf(" No entries to delete \n");	
$array[0]='-1';
}
else if($index== '1')
 {
 $a1=mysql_query(" UPDATE `courses` SET `course_1`='NULL',`index`='0' WHERE `user_id`='$user' ");
 //$b1=mysql_query(" SELECT  `course_1`,`course_ FROM `courses` WHERE `user_id`='$user' ");
printf(" No courses present \n");
$array[0]='-1';
 }
 
 else if($index== '2')
 {
 $a2=mysql_query(" UPDATE `courses` SET `course_2`='NULL',`index`='1' WHERE `user_id`='$user' ");
 $b2=mysql_query(" SELECT  `course_1` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row2 = mysql_fetch_array($b2))
		{
		$array[0]=$row2['course_1'];
		echo "<br />";
		}
 }
 else if($index== '3')
 {
 $a3=mysql_query(" UPDATE `courses` SET `course_3`='NULL',`index`='4' WHERE `user_id`='$user' ");
 $b3=mysql_query(" SELECT  `course_1`,`course_2` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row3 = mysql_fetch_array($b3))
		{
		$array[0]=$row3['course_1'];
		$array[1]=$row3['course_2'];
		echo "<br />";
		}
 }
 else if($index== '4')
 {
 $a4=mysql_query(" UPDATE `courses` SET `course_4`='NULL',`index`='3' WHERE `user_id`='$user' ");
 $b4=mysql_query(" SELECT  `course_1`,`course_2`,`course_3` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row4 = mysql_fetch_array($b4))
		{
		$array[0]=$row4['course_1'];
		$array[1]=$row4['course_2'];
		$array[2]=$row4['course_3'];
		echo "<br />";
		}
 }
 
 else if($index== '5')
 {
 $a5=mysql_query(" UPDATE `courses` SET `course_5`='NULL',`index`='4' WHERE `user_id`='$user' ");
 $b5=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row5 = mysql_fetch_array($b5))
		{
		$array[0]=$row5['course_1'];
		$array[1]=$row5['course_2'];
		$array[2]=$row5['course_3'];
		$array[3]=$row5['course_4'];
		echo "<br />";
		}
 }

 else if($index== '6')
 {
 $a6=mysql_query(" UPDATE `courses` SET `course_6`='NULL',`index`='5' WHERE `user_id`='$user' ");
 $b6=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row6 = mysql_fetch_array($b6))
		{
		$array[0]=$row6['course_1'];
		$array[1]=$row6['course_2'];
		$array[2]=$row6['course_3'];
		$array[3]=$row6['course_4'];
		$array[4]=$row6['course_5'];
		echo "<br />";
		}
 }
  else if($index== '7')
 {
 $a7=mysql_query(" UPDATE `courses` SET `course_7`='NULL',`index`='6' WHERE `user_id`='$user' ");
 $b7=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5`,`course_6` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row7 = mysql_fetch_array($b7))
		{
		$array[0]=$row7['course_1'];
		$array[1]=$row7['course_2'];
		$array[2]=$row7['course_3'];
		$array[3]=$row7['course_4'];
		$array[4]=$row7['course_5'];
		$array[5]=$row7['course_6'];
		echo "<br />";
		}
 }
   else if($index== '8')
 {
 	$a8=mysql_query(" UPDATE `courses` SET `course_8`='NULL',`index`='7' WHERE `user_id`='$user' ");
 $b8=mysql_query(" SELECT  `course_1`,`course_2`,`course_3`,`course_4`,`course_5`,`course_6`,`course_7` FROM `courses` WHERE `user_id`='$user' ");
 
	while($row8 = mysql_fetch_array($b8))
		{
		$array[0]=$row8['course_1'];
		$array[1]=$row8['course_2'];
		$array[2]=$row8['course_3'];
		$array[3]=$row8['course_4'];
		$array[4]=$row8['course_5'];
		$array[5]=$row8['course_6'];
		$array[6]=$row8['course_7'];
		echo "<br />";
		}
 }
printf(" \n FINAL VALUE \n");

for($j=0; $j<$index-1; $j++)
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