<?php
setcookie("uid", $_POST["username"], time()+3600);
?>

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
mysql_select_db("test", $con);
// Execute query
$result=mysql_query("SELECT `password` FROM `sign_in` WHERE (userid = '$temp_user')");
//echo $result;
while($row = mysql_fetch_array($result))
{
echo $row['password'];
$p=$row['password'];
echo "<br />";
}
echo "<br />";
echo $p;
if($p == $temp_pass)
{
printf(" returning 1, ho gaya chill maaro \n");
header( "Location: welcome_c.php");
exit(1);
$return = 1;
echo $return;
}
else
{
header( "Location: loginfail.php");
exit(1);
$return = 0;
echo $return;
}
?>
</body>
</html>