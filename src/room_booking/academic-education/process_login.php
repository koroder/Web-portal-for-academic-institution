<html>
<body>
Hello <?php 
echo $_POST["username"]; 
$temp_user = $_POST["username"]; 
?>!<br />
Your password is <?php
echo $_POST["password"]; 
$temp_pass = $_POST["password"];
?> !!!.
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
// Execute query
$result=mysql_query("SELECT `pass` FROM `login` WHERE (User_id = '$temp_user')");
//echo $result;
while($row = mysql_fetch_array($result))
{
echo $row['pass'];
$p=$row['pass'];
echo "<br />";
}
echo "<br />";
echo $p;
if($p == $temp_pass)
{
printf(" returning 1, ho gaya chill maaro \n");
header( "Location: student_login_welcome.php?user=".$temp_user);
exit(1);
$return = 1;
echo $return;
}
else
{
printf(" returning 0, nahi hua chill maaro \n");
header( "Location: loginfail.html");
exit(1);
$return = 0;
echo $return;
}
?>
</body>
</html>