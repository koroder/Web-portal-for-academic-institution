<?php
setcookie("user", $_POST["username"], time()+3600,"/");
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
if($temp_user=="admin" && $temp_pass=="admin")
{
	header( "Location: ../admin/admin_process.php");
	exit(1);
}
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
$result=mysql_query("SELECT `pass` FROM `proflogin` WHERE (id = '$temp_user')");
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
header( "Location: untitled-2.php");
exit(1);
$return = 1;
echo $return;
}
else
{
printf(" returning 0, nahi hua chill maaro \n");
header( "Location: loginfail1.html");
exit(1);
$return = 0;
echo $return;
}
?>
</body>
</html>