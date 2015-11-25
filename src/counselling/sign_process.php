
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
echo $name=$_POST["name"];  echo "<br/>";
echo $uid=$_POST["uid"];echo "<br/>";
echo $password=$_POST["password"];echo "<br/>";
echo $rank=$_POST["rank"]; echo "<br/>";
echo $dob=$_POST["dob"]; echo "<br/>";

$con = mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("test", $con);

$insert= mysql_query("INSERT INTO `sign_up`(`userid`, `name`, `password`, `dateofbirth`, `rank`) VALUES ('$uid','$name','$password','$dob','$rank')");
$insert1= mysql_query("INSERT INTO `sign_in`(`userid`, `name`, `password`,`rank`) VALUES ('$uid','$name','$password','$rank')");

header( "Location: counsling.php");
exit(1);
?>
<body>
</body>
</html>
